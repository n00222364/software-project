<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SureShore - Edit {{ $beach->name }}</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        .bg-ocean { background-color: #1a6b8a; }
        .bg-navy { background-color: #0b3d5c; }
        .text-navy { color: #0b3d5c; }
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

    <!-- header -->
    <section class="bg-ocean text-white py-4">
        <div class="container">
            <a href="{{ route('beaches.show', $beach) }}" class="text-white text-decoration-none" style="opacity: 0.8;">← Back to {{ $beach->name }}</a>
            <h1 class="fw-bold mt-2 mb-0">Edit Beach</h1>
        </div>
    </section>

    <!-- form -->
    <section class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <!-- show if any errors  -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- update using PUT method -->
                        <form action="{{ route('beaches.update', $beach) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Beach Name</label>
                                <!-- prefill from database -->
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $beach->name) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">Description</label>
                                <!-- prefill with old database text -->
                                <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $beach->description) }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="latitude" class="form-label fw-bold">Latitude</label>
                                    <input type="number" step="any" class="form-control" id="latitude" name="latitude" value="{{ old('latitude', $beach->latitude) }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="longitude" class="form-label fw-bold">Longitude</label>
                                    <input type="number" step="any" class="form-control" id="longitude" name="longitude" value="{{ old('longitude', $beach->longitude) }}" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="quality_results" class="form-label fw-bold">Quality Results URL</label>
                                <input type="url" class="form-control" id="quality_results" name="quality_results" value="{{ old('quality_results', $beach->quality_results) }}" required>
                            </div>

                            <button type="submit" class="btn btn-success">Update Beach</button>
                            <a href="{{ route('beaches.show', $beach) }}" class="btn btn-outline-secondary ms-2">Cancel</a>
                        </form>

                    </div>
                </div>
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

</body>
</html>