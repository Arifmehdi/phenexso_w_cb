<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Musafir International | Leading Tile & Construction Materials Manufacturer in Bangladesh')</title>
    <meta name="description" content="@yield('meta_description', 'Musafir International is Bangladesh\'s premier manufacturer of premium tiles, parking tiles, hollow blocks, solid bricks, pavers & construction materials.')">
    <meta name="keywords" content="@yield('meta_keywords', 'tile manufacturer Bangladesh, parking tiles, hollow blocks, solid bricks, pavers, construction materials')">
    <meta name="robots" content="index, follow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    @stack('styles')
</head>
<body>

    @include('website.test.test_include.header')

    <main>
        @yield('content')
    </main>

    @include('website.test.test_include.footer')

    <script src="{{ asset('public/js/main.js') }}"></script>
    @stack('scripts')

</body>
</html>
