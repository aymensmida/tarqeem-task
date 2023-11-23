<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Application Name @yield('title')</title>
    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

.navbar-nav .active{
    background-color:#0d6efd!important;
    color: white !important;
    border-radius: 12px;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white mb-3 shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link  {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>

                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('page-content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
