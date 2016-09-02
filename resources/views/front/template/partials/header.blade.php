<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24-07-2016
 * Time: 10:40 PM
 */
?>


<div class="masthead hidden-xs">
    <img src="{{ asset('images/layout/header.JPG') }}" class="img-responsive logo-header-img"/>
    <img src="{{ asset('images/layout/header1.png') }}" class="img-responsive img-header-desktop"/>
</div>
<div class="navbar navbar-inverse text-center sin-bordes" role="navigation">
    <div class="container-fluid text-center">

        <div class="navbar-header text-center">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('front.index')}}">
                <img src="{{ asset('images/layout/header-mobile.png') }}" alt="Carolina Silva" class="img-responsive hidden-sm hidden-md hidden-lg img-header-logo">
            </a>
        </div>

        <div class="collapse navbar-collapse text-center
">
            <ul class="nav navbar-nav text-center">
                <li><a href="{{ Route('front.index') }}" class="HeaderLink">HOME</a></li>
                <li><a href="{{route('front.search.category', 'INSPIRATION')}}" class="HeaderLink">INSPIRATION</a></li>
                <li><a href="{{route('front.search.category', 'LIFESTYLE')}}" class="HeaderLink">LIFESTYLE</a></li>
                <li><a href="{{route('front.search.category', 'FASHION')}}" class="HeaderLink">FASHION</a></li>
                <li><a href="{{ route('front.about') }}" class="HeaderLink">ABOUT</a></li>
                <li><a href="{{ route('front.contact') }}" class="HeaderLink">CONTACT</a></li>
            </ul>

            <div class="col-sm-3 col-md-3 pull-right">
                {!! Form::open(['route' => 'front.index', 'method' => 'GET', 'class' => 'navbar-form','role' => 'search']) !!}
                <div class="input-group">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" id="SearchInput"><i class="glyphicon glyphicon-search" id="SearchIcon"></i></button>
                    </div>
                    <input type="text" class="form-control" placeholder="SEARCH" name="srch_term" id="srch_term">
                </div>
                {!! Form::close() !!}
            </div>


        </div><!--/.nav-collapse -->


    </div>
</div>


@section('js')

    <script type="text/javascript">

        $('#srch_term').keydown(function(event) {
            if (event.keyCode == 13) {
                this.form.submit();
                return false;
            }
        });

    </script>

@endsection