<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 18-07-2016
 * Time: 09:56 PM
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default') | Panel de Administracion</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/kartik/css/fileinput.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
</head>
<body>

    <div class="container">

    @include('admin.template.partials.nav')

    <!-- Main component for a primary marketing message or call to action -->
        <div class="row">
            <div class="col-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @yield('title', 'Default')
                    </div>
                    <div class="panel-body">
                        @include('flash::message')
                        @include('admin.template.partials.errors')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>




    <!--<footer>
        FOOTER HERE
    </footer>-->

    </div>

    <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
    <script src="{{ asset('plugins/kartik/js/fileinput.js') }}"></script>
    <script src="{{ asset('plugins/fileupload/jquery.MultiFile.js') }}" type="text/javascript" language="javascript"></script>
    @yield('js')
</body>
</html>
