<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'BLOG') | Carolina Silva</title>
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}" >
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('plugins/image-gallery/css/bootstrap-image-gallery.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header>
        @include('front.template.partials.header')
    </header>

    @include('flash::message')
    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row-fluid contenido-x contenido-y">
        @yield('content')
    </div>


    <footer>
        @include('front.template.partials.footer')
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/jcarousel/jquery.jcarousel.min.js') }}"></script>
    <script src="{{ asset('plugins/instafeed/instafeed.min.js') }}"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="{{ asset('plugins/image-gallery/js/bootstrap-image-gallery.min.js') }}"></script>
    @yield('js')
</body>
</html>
