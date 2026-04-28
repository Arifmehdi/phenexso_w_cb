<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Musafir International | Leading Tile & Construction Materials Manufacturer in Bangladesh')</title>
    <meta name="description" content="@yield('meta_description', 'Musafir International is Bangladesh\'s premier manufacturer of premium tiles, parking tiles, hollow blocks, solid bricks, pavers & construction materials.')">
    <meta name="keywords" content="@yield('meta_keywords', 'tile manufacturer Bangladesh, parking tiles, hollow blocks, solid bricks, pavers, construction materials')">
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}">
    <link rel="icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" type="image/x-icon">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/views/website/test/test_include/theme.css') }}">


            @yield('meta')
        <!-- Start Google Tag Manager -->

        <!-- ECOMMERCE CSS START  -->
          <!-- Web Fonts -->
        <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet">

        <!-- Vendor CSS -->
        {{--<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">--}}
        <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/animate/animate.compat.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/magnific-popup/magnific-popup.min.css') }}">
        <!-- ECOMMERCE CSS End  -->
    @stack('styles')
</head>
<body>

    @include('website.test.test_include.header')

    <main>
        @yield('content')
    </main>

    @include('website.test.test_include.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('public/js/main.js') }}"></script>
    @include('website.layouts.product_js')
    @stack('scripts')
    @stack('js')
    </body>
</html>
