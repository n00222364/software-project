<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
            <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

            <style>

        /* colours */
        .bg-ocean {
            background-color: #1a6b8a;
        }

        .bg-navy {
            background-color: #0b3d5c;
        }

        .text-navy {
            color: #0b3d5c;
        }

        .btn-coral {
            background-color: #ff6b5a;
            color: white;
        }

        .btn-coral:hover {
            background-color: #e55a4a;
            color: white;
        }

            </style>
    </head>

    <!-- make body into a flexbox, arrange it vertically and make sure everything is all tall as 100% of the screen -->
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
                    <li class="nav-item">
                        <li class="nav-item"><a class="nav-link text-white" href="/favourites">Favourites</a></li>
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

    <!-- under nav section -->
    <section class="bg-ocean text-white text-center py-5">
        <div class="container py-5">
            <h1 class="display-4 fw-bold mb-3">Know Before You Swim</h1>

            <!-- - lead=slightly larger paragraph text  mx-auto= centers the paragraph -->
            <p class="lead mx-auto mb-4" style="max-width: 500px; opacity: 0.9;">
                Check water quality ratings for Ireland's beaches before you head out.
            </p>
            <a href="/beaches" class="btn btn-coral btn-lg">Explore Beaches</a>
        </div>
    </section>


    <section class="container my-5 text-center">
        <h2 class="text-navy mb-4">What do we do?</h2>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">

                        <div class="fs-1 mb-3">
                            <!-- water quality symbol -->
                        <i data-lucide="flask-conical" style="width: 40px; height: 40px; color: #1a6b8a;"></i>
                        </div>
                        <h5 class="card-title text-navy">Water Quality Data</h5>
                        <p class="card-text text-muted">Real test results for bacteria levels at beaches around Ireland.</p>
                    </div>
                </div>
            </div>

        <!-- cards info section -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">

                        <div class="fs-1 mb-3">
                            <!-- map symbol -->
                        <i data-lucide="map-pin" style="width: 40px; height: 40px; color: #1a6b8a;"></i>
                        </div>
                        <h5 class="card-title text-navy">Find a Beach</h5>
                        <p class="card-text text-muted">Search beaches by location and filter by water quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- recent results section -->
    <section class="container my-5">
        <h2 class="text-navy text-center mb-4">Recent Results</h2>
        <div class="mx-auto" style="max-width: 600px;">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>Curracloe Beach</strong><br>
                        <small class="text-muted">Wexford</small>
                    </div>
                    <span class="badge bg-success rounded-pill px-3 py-2">Excellent</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>Salthill Beach</strong><br>
                        <small class="text-muted">Galway</small>
                    </div>
                    <span class="badge bg-primary rounded-pill px-3 py-2">Good</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>Dollymount Strand</strong><br>
                        <small class="text-muted">Dublin</small>
                    </div>
                    <span class="badge bg-warning text-dark rounded-pill px-3 py-2">Fair</span>
                </li>
            </ul>
        </div>
    </section>
        <!-- bootstrap script for modals -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- script for icons -->
        <script src="https://unpkg.com/lucide@latest"></script>
        <script>lucide.createIcons();</script>
    </body>

    <footer class="bg-navy text-center text-white py-3 mt-auto">
        <p class="mb-0">© 2026 SureShore</p>
    </footer>

</html>
