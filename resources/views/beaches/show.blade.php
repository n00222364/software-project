<!-- show each beach  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SureShore - {{ $beach->name }}</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        .bg-ocean { background-color: #1a6b8a; }
        .bg-navy { background-color: #0b3d5c; }
        .text-navy { color: #0b3d5c; }
        #detail-map { height: 350px; width: 100%; border-radius: 10px; }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-navy">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i data-lucide="waves" style="width: 20px; height: 20px;"></i> SureShore
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/beaches">Beaches</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- header with beach name -->
    <section class="bg-ocean text-white py-4">
        <div class="container">
            <a href="/beaches" class="text-white text-decoration-none" style="opacity: 0.8;">← Back to all beaches</a>
            <h1 class="fw-bold mt-2 mb-0">{{ $beach->name }}</h1>
        </div>
    </section>

    <!-- map -->
    <section class="container my-4">
        <div id="detail-map"></div>
    </section>

    <!-- beach details and description side by side -->
    <section class="container my-4">
        <div class="row g-4">

            <!-- details card -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-navy mb-3">Beach Details</h5>
                        <table class="table table-borderless mb-0">
                            <tr>
                                <td class="text-muted fw-bold" style="width: 130px;">Beach Name:</td>
                                <td>{{ $beach->name }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted fw-bold">Latitude:</td>
                                <td>{{ $beach->latitude }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted fw-bold">Longitude:</td>
                                <td>{{ $beach->longitude }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- description card -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-navy mb-3">Description</h5>
                        <p class="card-text text-muted">{{ $beach->description }}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- link to EPA quality results -->
    <section class="container my-4 text-center">
        <a href="{{ $beach->quality_results }}" target="_blank" class="btn btn-outline-secondary">
            View on Beaches.ie
        </a>
    </section>

     <!--water quality chart -->
     <section class="container my-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title text-navy mb-3">Water Quality Results</h5>
                <canvas id="qualityChart" height="120"></canvas>
                <p class="text-muted small mt-2 mb-0">
                    E. coli and Intestinal Enterococci levels (cfu/100ml). Lower is better.
                </p>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="bg-navy text-center text-white py-3 mt-auto">
        <p class="mb-0">© {{ date('Y') }} SureShore</p>
    </footer>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>lucide.createIcons();</script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- map zoomed in on this beach -->
    <script>
        let map = L.map('detail-map').setView([{{ $beach->latitude }}, {{ $beach->longitude }}], 14);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([{{ $beach->latitude }}, {{ $beach->longitude }}]).addTo(map)
            .bindPopup('<strong>{{ $beach->name }}</strong>')
            .openPopup();
    </script>


<!-- chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // generate different placeholder data per beach using the beach ID as a seed
    let beachId = {{ $beach->id }};
    
    // generate a random seed for each beach chart
    function seededRandom(seed) {
        let x = Math.sin(seed) * 10000;
        return x - Math.floor(x);
    }

    let ecoliData = [];
    let enteroData = [];
    for (let i = 0; i < 8; i++) {
        ecoliData.push(Math.floor(seededRandom(beachId * 100 + i) * 200));
        enteroData.push(Math.floor(seededRandom(beachId * 200 + i) * 80));
    }

    let ctx = document.getElementById('qualityChart').getContext('2d');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jun 1', 'Jun 15', 'Jul 1', 'Jul 15', 'Aug 1', 'Aug 15', 'Sep 1', 'Sep 15'],
            datasets: [
                {
                    label: 'E. coli (cfu/100ml)',
                    data: ecoliData,
                    backgroundColor: '#1a6b8a'
                },
                {
                    label: 'Intestinal Enterococci (cfu/100ml)',
                    data: enteroData,
                    backgroundColor: '#4db8d1'
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'cfu/100ml' }
                }
            }
        }
    });
</script>

</body>
</html>