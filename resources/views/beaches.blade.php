<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SureShore - Beaches</title>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- leaftlet.js // map api -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

        <style>
            /* colours */
            .bg-ocean { background-color: #1a6b8a; }
            .bg-navy { background-color: #0b3d5c; }
            .text-navy { color: #0b3d5c; }
            .btn-coral { background-color: #ff6b5a; color: white; }
            .btn-coral:hover { background-color: #e55a4a; color: white; }

            /* map dimensions for page */
            #map {
                height: 500px;
                width: 100%;
                border-radius: 10px;
            }
        </style>
    </head>

    <body class="d-flex flex-column min-vh-100">

        <!-- navbar section -->
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
                        <li class="nav-item"><a class="nav-link text-white" href="/">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Beaches header section -->
        <section class="bg-ocean text-white text-center py-4">
            <div class="container">
                <h1 class="fw-bold mb-1">Beaches</h1>
                <p class="mb-0" style="opacity: 0.9;">Explore water quality results across Ireland</p>
            </div>
        </section>

        <!-- leaflet map -->
        <section class="container my-4">
            <div id="map"></div>
        </section>

        <!-- beach list table -->
        <section class="container my-4">
            <h2 class="text-navy mb-3">Beach List</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <!-- table row 1 -->
                        <tr>
                            <!-- table head -->
                            <th>Beach Name</th>
                            <th>County</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <!-- table body -->
                    <tbody>
                        <!-- table data -->
                            <td>Killiney Beach</td>
                            <td>Dublin</td>
                            <td><span class="badge bg-success rounded-pill px-3 py-2">Excellent</span></td>
                            <td><a href="/beaches/1" class="btn btn-sm btn-outline-secondary">View Details</a></td>
                        </tr>

                         <!-- table row 2 -->
                        <tr>
                            <td>Brittas Bay</td>
                            <td>Wicklow</td>
                            <td><span class="badge bg-success rounded-pill px-3 py-2">Excellent</span></td>
                            <td><a href="/beaches/2" class="btn btn-sm btn-outline-secondary">View Details</a></td>
                        </tr>

                        <!-- table row 3 -->
                        <tr>
                            <td>Curracloe Beach</td>
                            <td>Wexford</td>
                            <td><span class="badge bg-success rounded-pill px-3 py-2">Excellent</span></td>
                            <td><a href="/beaches/3" class="btn btn-sm btn-outline-secondary">View Details</a></td>
                        </tr>

                        <!-- table row 4 -->
                        <tr>
                            <td>Salthill Beach</td>
                            <td>Galway</td>
                            <td><span class="badge bg-primary rounded-pill px-3 py-2">Good</span></td>
                            <td><a href="/beaches/4" class="btn btn-sm btn-outline-secondary">View Details</a></td>
                        </tr>

                        <!-- table row 5 -->
                        <tr>
                            <td>Dollymount Strand</td>
                            <td>Dublin</td>
                            <td><span class="badge bg-warning text-dark rounded-pill px-3 py-2">Fair</span></td>
                            <td><a href="/beaches/5" class="btn btn-sm btn-outline-secondary">View Details</a></td>
                        </tr>

                        <!-- table row 6 -->
                        <tr>
                            <td>Lahinch Beach</td>
                            <td>Clare</td>
                            <td><span class="badge bg-primary rounded-pill px-3 py-2">Good</span></td>
                            <td><a href="/beaches/6" class="btn btn-sm btn-outline-secondary">View Details</a></td>
                        </tr>

                        <!-- table row 7 -->
                        <tr>
                            <td>Inchydoney Beach</td>
                            <td>Cork</td>
                            <td><span class="badge bg-success rounded-pill px-3 py-2">Excellent</span></td>
                            <td><a href="/beaches/7" class="btn btn-sm btn-outline-secondary">View Details</a></td>
                        </tr>

                        <!-- table row 8 -->
                        <tr>
                            <td>Rossnowlagh Beach</td>
                            <td>Donegal</td>
                            <td><span class="badge bg-primary rounded-pill px-3 py-2">Good</span></td>
                            <td><a href="/beaches/8" class="btn btn-sm btn-outline-secondary">View Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- footer -->
        <footer class="bg-navy text-center text-white py-3 mt-auto">
            <p class="mb-0">© 2026 SureShore</p>
        </footer>

        <!-- bootstrap script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- icons -->
        <script src="https://unpkg.com/lucide@latest"></script>
        <script>lucide.createIcons();</script>

        <!-- leaflet map -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

        <!-- map script -->
        <script>
            // Create map centered on Ireland
            let map = L.map('map').setView([53.5, -7.5], 7);

            // Add OpenStreetMap tiles
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Beach data — hardcoded for now
            let beaches = [
                { name: "Killiney Beach",      lat: 53.2563, lng: -6.1122, id: 1 },
                { name: "Brittas Bay",         lat: 52.8850, lng: -6.0650, id: 2 },
                { name: "Curracloe Beach",     lat: 52.3920, lng: -6.3740, id: 3 },
                { name: "Salthill Beach",      lat: 53.2590, lng: -9.0890, id: 4 },
                { name: "Dollymount Strand",   lat: 53.3690, lng: -6.1540, id: 5 },
                { name: "Lahinch Beach",       lat: 52.9340, lng: -9.3480, id: 6 },
                { name: "Inchydoney Beach",    lat: 51.5970, lng: -8.8620, id: 7 },
                { name: "Rossnowlagh Beach",   lat: 54.5440, lng: -8.2240, id: 8 }
            ];

            // Add a marker for each beach
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
