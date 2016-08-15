<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 18-07-2016
 * Time: 10:06 PM
 */
?>

        <!-- Static navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ Route('admin.index') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo Garota" class="img-responsive logo-admin" ></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            @if (Auth::user())
            <ul class="nav navbar-nav">
                <li><a href="{{ Route('admin.index') }}">Inicio</a></li>
                <li><a href="{{ Route('admin.articles.index') }}">Articulos</a></li>
                <li><a href="{{ Route('admin.banners.index') }}">Banners</a></li>
                <li><a href="{{ Route('admin.categories.index') }}">Categorias</a></li>
                <li><a href="{{ Route('admin.images.index') }}">Imagenes</a></li>
                <li><a href="{{ Route('admin.tags.index') }}">Tags</a></li>
                @if(Auth::user()->admin())
                    <li><a href="{{ Route('admin.users.index') }}">Usuarios</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('front.index') }}" target="_blank">Pagina Principal</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}

                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('admin.auth.logout') }}">Salir</a></li>
                    </ul>
                </li>
            </ul>
             @else
                <ul class="nav navbar-nav">
                    <li><a href="/">Inicio</a></li>
                </ul>
             @endif
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

