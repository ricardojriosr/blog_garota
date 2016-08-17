<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24-07-2016
 * Time: 10:30 PM
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'BLOG') | Carolina Silva</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/journal/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/general.css') }}" >
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" >
</head>
<body>
    <header>
        @include('front.template.partials.header')
    </header>

    @yield('content')

    <footer>
        @include('front.template.partials.footer')
    </footer>

    <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/jcarousel/jquery.jcarousel.min.js') }}"></script>
    <script src="{{ asset('plugins/instafeed/instafeed.min.js') }}"></script>
    @yield('js')
</body>
</html>
