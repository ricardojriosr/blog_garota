<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 16-08-2016
 * Time: 05:37 PM
 */
?>
<br>
<div class="container hidden-xs">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 footer1">
        <div class="footer-title">KEEP READING!</div>
    </div>
    <div class="col-sm-2"></div>
</div>

<div class="container hidden-sm hidden-md hidden-lg">
    <div class="col-xs-2"></div>
    <div class="col-xs-8 footer1">
        <div class="footer-title-mobile">KEEP READING!</div>
    </div>
    <div class="col-xs-2"></div>
</div>

<br>

<div class="container hidden-xs">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="col-sm-4 my-style ">
            <a href="{{route('front.search.category', 'MY STYLE')}}">
                <img src="{{ asset('images/layout/my-style.png') }}" alt="My Style" class="img-responsive">
            </a>
        </div>
        <div class="col-sm-4 inspiration ">
            <a href="{{route('front.search.category', 'INSPIRATION')}}">
                <img src="{{ asset('images/layout/inspiration.png') }}" alt="Inspiration" class="img-responsive">
            </a>
        </div>
        <div class="col-sm-4 videos ">
            <a href="{{route('front.search.category', 'VIDEOS')}}">
                <img src="{{ asset('images/layout/videos.png') }}" alt="Videos" class="img-responsive">
            </a>
        </div>
    </div>
    <div class="col-sm-2"></div>
</div>

<div class="container hidden-sm hidden-md hidden-lg">

    <div class="col-xs-12">
        <div class="col-xs-4 my-style ">
            <a href="{{route('front.search.category', 'MY STYLE')}}">
                <img src="{{ asset('images/layout/my-style.png') }}" alt="My Style" class="img-responsive">
            </a>
        </div>
        <div class="col-xs-4 inspiration ">
            <a href="{{route('front.search.category', 'INSPIRATION')}}">
                <img src="{{ asset('images/layout/inspiration.png') }}" alt="Inspiration" class="img-responsive">
            </a>
        </div>
        <div class="col-xs-4 videos ">
            <a href="{{route('front.search.category', 'VIDEOS')}}">
                <img src="{{ asset('images/layout/videos.png') }}" alt="Videos" class="img-responsive">
            </a>
        </div>
    </div>

</div>


<br>
<div class="row follow-instagram hidden-xs">
    <div class="vertical-line" style="float: left; margin-left: 8%;"><hr></div>
    FOLLOW @CAROMNG ON INSTAGRAM
    <div class="vertical-line" style="float: right; margin-right: 8%;"><hr></div>
</div>

<div class="row follow-instagram-mobile hidden-lg hidden-md hidden-sm">
    <div class="vertical-line-mobile" style="float: left; margin-left: 0;"></div>
    FOLLOW @CAROMNG ON INSTAGRAM
    <div class="vertical-line-mobile" style="float: right; margin-right: 0;"></div>
</div>


<!-- LightWidget WIDGET -->
<script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/8d636a01ffa1517bb3e34e0c5ea9b2b2.html" id="lightwidget_8d636a01ff" name="lightwidget_8d636a01ff"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

<div class="row final-footer hidden-xs footer-font">
    <div class="col-sm-1"></div>
    <div class="col-sm-4 logo-footer">
        <img src="{{ asset('images/layout/header-mobile.png') }}" alt="Carolina Silva" class="img-responsive hidden-xs">
    </div>
    <div class="col-sm-4 menus-footer">
        <div class="col-sm-4">
            <ul class="list-group borde-izquierdo">
                <li class="list-group-item listado"><a href="{{route('front.search.category', 'TRAVELS')}}">TRAVELS</a></li>
                <li class="list-group-item listado"><a href="{{route('front.search.category', 'INSPIRATION')}}">INSPIRATION</a></li>
                <li class="list-group-item listado"><a href="{{route('front.search.category', 'LIFESTYLE')}}">LIFESTYLE</a></li>
            </ul>
        </div>
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item listado"><a href="{{route('front.search.category', 'FASHION')}}">FASHION</a></li>
                <li class="list-group-item listado"><a href="{{ route('front.about') }}">ABOUT</a></li>
                <li class="list-group-item listado"><a href="{{ route('front.contact') }}">CONTACT</a></li>
            </ul>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <div class="col-sm-3 copy-right "><span class="copy-right-span ">Copyright Carolina Silva <?php echo date('Y'); ?></span></div>
</div>



<div class="container final-footer hidden-lg hidden-md hidden-sm text-center footer-font">
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8 footer-mobile-div logo-footer text-center">
            <img src="{{ asset('images/layout/header-mobile.png') }}" alt="Carolina Silva" class="img-responsive hidden-sm hidden-md hidden-lg">
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row subitems-mobile">
        <div class="col-xs-4 text-right listado"><a href="{{route('front.search.category', 'TRAVELS')}}">TRAVELS</a></div>
        <div class="col-xs-4 text-center listado"><a href="{{route('front.search.category', 'INSPIRATION')}}">INSPIRATION</a></div>
        <div class="col-xs-4 text-left listado"><a href="{{route('front.search.category', 'LIFESTYLE')}}">LIFESTYLE</a></div>
    </div>
    <div class="row subitems-mobile">
        <div class="col-xs-4 text-right listado"><a href="{{route('front.search.category', 'FASHION')}}">FASHION</a></div>
        <div class="col-xs-4 text-center listado"><a href="{{ route('front.about') }}">ABOUT</a></div>
        <div class="col-xs-4 text-left listado"><a href="{{ route('front.contact') }}">CONTACT</a></div>
    </div>
    <div class="row text-center copy-right-mobile ">
        <span class="copy-right-span-mobile">Copyright Carolina Silva <?php echo date('Y'); ?></span>
    </div>
</div>
