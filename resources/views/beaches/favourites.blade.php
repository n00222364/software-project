<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SureShore - My Favourites</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/beaches">Beaches</a></li>

                    @auth
                        <li class="nav-item"><a class="nav-link text-white" href="/favourites">Favourites</a></li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="nav-link text-white btn btn-link" style="text-decoration: none;">Logout</button>
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
            <h1 class="fw-bold mb-1">My Favourite Beaches</h1>
            <p class="mb-0" style="opacity: 0.9;">Your saved beaches in one place</p>
        </div>
    </section>

    <!-- favourites list -->
    <section class="container my-4">
        @if ($beaches->count() > 0)
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
                        @foreach ($beaches as $beach)
                        <tr>
                            <td>{{ $beach->name }}</td>
                            <td>{{ Str::limit($beach->description, 50) }}</td>
                            <td>
                                <a href="{{ route('beaches.show', $beach) }}" class="btn btn-sm btn-outline-secondary">View Details</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info">
                You haven't saved any favourite beaches yet. Browse the <a href="/beaches">beaches page</a> and click the favourite button on any beach.
            </div>
        @endif
    </section>

    <!-- footer -->
    <footer class="bg-navy text-center text-white py-3 mt-auto">
        <p class="mb-0">© {{ date('Y') }} SureShore</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>lucide.createIcons();</script>

</body>
</html>