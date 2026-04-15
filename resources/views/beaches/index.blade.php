<!-- view all beaches -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SureShore - Beaches</title> <!-- CHANGED: updated title -->

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- leaflet css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- custom colours and map height -->
    <style>
        .bg-ocean { background-color: #1a6b8a; }
        .bg-navy { background-color: #0b3d5c; }
        .text-navy { color: #0b3d5c; }
        #map { height: 500px; width: 100%; border-radius: 10px; }
    </style>
</head>


<!-- no white gap at footer -->
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

    <!-- page header -->
    <section class="bg-ocean text-white text-center py-4">
        <div class="container">
            <h1 class="fw-bold mb-1">Beaches</h1>
            <p class="mb-0" style="opacity: 0.9;">Explore water quality results across Ireland</p>
        </div>
    </section>

    <!-- success alert -->
    @if (session('success'))
        <div class="container mt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endif

    <!-- leaflet map -->
    <section class="container my-4">
        <div id="map"></div>
    </section>

  <!-- beach list table -->
  <section class="container my-4">
       
        <!-- heading and button on the same line -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-navy mb-0">Beach List</h2>
            <!-- create button (just for admins) -->
            @auth
                @if (auth()->user()->role === 'admin')
                    <a href="{{ route('beaches.create') }}" class="btn btn-success">+ Add Beach</a>
                @endif
            @endauth
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Beach Name</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <!-- loop through all the beaches from the database -->
                    @foreach($beaches as $beach)
                    <tr>
                        <td>{{ $beach->name }}</td>
                        <td>{{ Str::limit($beach->description, 50) }}</td>
                        <td>
                            <a href="{{ route('beaches.show', $beach) }}" class="btn btn-sm btn-outline-secondary">
                                View Details
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>

    <!-- footer -->
    <footer class="bg-navy text-center text-white py-3 mt-auto">
        <p class="mb-0">© {{ date('Y') }} SureShore</p>
    </footer>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>lucide.createIcons();</script>

    <!-- leaflet script -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- map setup with markers from database -->
    <script>
        let map = L.map('map').setView([53.5, -7.5], 7);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        let beaches = [
            @foreach($beaches as $beach)
                {
                    name: "{{ $beach->name }}",
                    lat: {{ $beach->latitude }},
                    lng: {{ $beach->longitude }},
                    id: {{ $beach->id }}
                },
            @endforeach
        ];

        beaches.forEach(function(beach) {
            let marker = L.marker([beach.lat, beach.lng]).addTo(map);
            marker.bindPopup(
                '<strong>' + beach.name + '</strong><br>' +
                '<a href="/beaches/' + beach.id + '">View Details</a>'
            );
        });
    </script>

</body>
</html>