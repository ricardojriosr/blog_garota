<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 16-08-2016
 * Time: 05:37 PM
 */
?>
<br>
<div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 footer1">
        <div class="footer-title">KEEP READING!</div>
    </div>
    <div class="col-sm-2"></div>
</div>
<br>
<div class="container">
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
<br>
<div class="row follow-instagram">
    <div class="vertical-line" style="float: left; margin-left: 8%;"><hr></div>
    FOLLOW @CAROMNG ON INSTAGRAM
    <div class="vertical-line" style="float: right; margin-right: 8%;"><hr></div>
</div>
<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/8d636a01ffa1517bb3e34e0c5ea9b2b2.html" id="lightwidget_8d636a01ff" name="lightwidget_8d636a01ff"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
<div class="row final-footer ">
    <div class="col-sm-1"></div>
    <div class="col-sm-4 logo-footer">
        Carolina Silva
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
                <li class="list-group-item listado"><a href="#">ABOUT</a></li>
                <li class="list-group-item listado"><a href="#">CONTACT</a></li>
            </ul>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <div class="col-sm-3 copy-right "><span class="copy-right-span ">Copyright Carolina Silva <?php echo date('Y'); ?></span></div>
</div>