<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" integrity="sha512-ykRBEJhyZ+B/BIJcBuOyUoIxh0OfdICfHPnPfBy7eIiyJv536ojTCsgX8aqrLQ9VJZHGz4tvYyzOM0lkgmQZGw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{ config('app.name', 'Traqeem Task') }} @yield('title')</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    {{-- Meta --}}
    <meta name="description" content="Traqeem Task">
    <meta name="keywords" content="Traqeem, sTask">
    <meta name="author" content="Smida Aymen">
    <meta name="robots" content="index, follow">

    <!-- Open Graph (og)  -->
    <meta property="og:title" content="{{ config('app.name', 'Traqeem Task') }} - @yield('title')">
    <meta property="og:description" content="Traqeem Task">
    <meta property="og:image" content="https://via.placeholder.com/150">
    <meta property="og:url" content="URL complète de la page">
    <meta property="og:type" content="website">

    <!--  Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'Traqeem Task') }} - @yield('title')">
    <meta name="twitter:description" content="Traqeem Task ">
    <meta name="twitter:image" content="https://via.placeholder.com/150">
</head>

<body>
    @include('Guest.partials.navbar')

    <div class="container" style="min-height: 90vh">

        <div id="loading-spinner" class="loader mt-5"></div>
        <div id="content-container" style="opacity: 0;">
            @yield('page-content')
        </div>

    </div>
    @include('Guest.partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/main.js') }}"></script>
</body>

</html>
