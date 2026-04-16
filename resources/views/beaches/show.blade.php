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

                <!-- checks if a user is logged in and shows different links based on logged in status -->
                <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/beaches">Beaches</a></li>
                @auth
                <li class="nav-item"><a class="nav-link text-white" href="/favourites">Favourites</a></li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="nav-link text-white btn btn-link" style="text-decoration: none;">
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link text-white" href="/login">Login</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/register">Register</a></li>
                @endauth
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
                <tr>
                    <td class="text-muted fw-bold">Water Quality:</td>
                    <td>{{ $beach->water_quality_status }}</td>
                </tr>
                <tr>
                    <td class="text-muted fw-bold">E. coli:</td>
                    <td>{{ $beach->e_coli }} cfu/100ml</td>
                </tr>
                <tr>
                    <td class="text-muted fw-bold">Intestinal Enterococci:</td>
                    <td>{{ $beach->intestinal_enterococci }} cfu/100ml</td>
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

  
        
    <!-- link to results + edit/delete-->
    <section class="container my-4 text-center">

      <!-- let logged in users save their favourite beaches -->
      @auth
      <!-- checks if the current beach is in the users favourites, if yes show unfavourite, Else show favourite -->
       <!-- contains() searches through the users favourites to check if the current beach id is there -->
            @if (auth()->user()->favouriteBeaches->contains($beach->id))
                <form action="{{ route('beaches.unfavourite', $beach) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning">★ Unfavourite</button>
                </form>
            @else
                <form action="{{ route('beaches.favourite', $beach) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-warning">☆ Favourite</button>
                </form>
            @endif
        @endauth
        
        <a href="{{ $beach->quality_results }}" target="_blank" class="btn btn-outline-secondary">
            View on Beaches.ie
        </a>
        <!-- checks if a user has admin permissions to access edit/delete -->
        @auth
        @if (auth()->user()->role === 'admin')
            <a href="{{ route('beaches.edit', $beach) }}" class="btn btn-outline-primary ms-2">
                Edit Beach
            </a>
            <form action="{{ route('beaches.destroy', $beach) }}" method="POST" class="d-inline ms-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this beach?')">
                    Delete Beach
                </button>
            </form>
        @endif
    @endauth

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
    // get the stored ecoli and enterecoli reading from the db
    let baseEcoli = {{ $beach->e_coli ?? 0 }};
    let baseEntero = {{ $beach->intestinal_enterococci ?? 0 }};

    let labels = ['Jun 1', 'Jun 15', 'Jul 1', 'Jul 15', 'Aug 1', 'Aug 15', 'Sep 1', 'Sep 15'];

    // make seasonal readings based on the stored bacteria values generated from seeder
    // use those as pretend readings
    let ecoliData = [
    // Math.max stops value from going below 0, to make reading make sense as a negative bacteria reading makes no sense
    Math.max(5, baseEcoli - 40),
    Math.max(5, baseEcoli - 15),
    baseEcoli + 10,
    baseEcoli + 35,
    Math.max(5, baseEcoli - 5),
    baseEcoli + 25,
    Math.max(5, baseEcoli - 30),
    baseEcoli + 15
    ];

    // different plus/minus values to create differing bars on the bar chart
    let enteroData = [
    Math.max(5, baseEntero - 20),
    Math.max(5, baseEntero - 8),
    baseEntero + 5,
    baseEntero + 18,
    Math.max(5, baseEntero - 3),
    baseEntero + 12,
    Math.max(5, baseEntero - 15),
    baseEntero + 7
    ];

    let ctx = document.getElementById('qualityChart').getContext('2d');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'E. coli (cfu/100ml)',
                    // bring in the ecoli data we made with the Math.max func
                    data: ecoliData,
                    backgroundColor: '#1a6b8a'
                },
                {
                    label: 'Intestinal Enterococci (cfu/100ml)',
                    // bring in the entero data we made with the Math.max func
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