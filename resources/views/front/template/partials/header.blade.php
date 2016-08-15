<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24-07-2016
 * Time: 10:40 PM
 */
?>
<style>
    @media (min-width: 768px) {
        .navbar .navbar-nav {
            display: inline-block;
            float: none;
            vertical-align: top;
        }

        .navbar .navbar-collapse {
            text-align: center;
        }
    }
</style>
<div class="masthead">
    <img src="{{ asset('images/layout/header.JPG') }}" class="img-responsive logo-header-img"/>
</div>
<div class="navbar navbar-inverse text-center sin-bordes" role="navigation">
    <div class="container text-center">
        <div class="navbar-header text-center">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse text-center">
            <ul class="nav navbar-nav text-center">
                <li><a href="{{ Route('front.index') }}" class="HeaderLink">HOME</a></li>
                <li><a href="#" class="HeaderLink">INSPIRATION</a></li>
                <li><a href="#" class="HeaderLink">LIFESTYLE</a></li>
                <li><a href="#" class="HeaderLink">FASHION</a></li>
                <li><a href="#" class="HeaderLink">ABOUT</a></li>
                <li><a href="#" class="HeaderLink">CONTACT</a></li>
            </ul>

            <div class="col-sm-3 col-md-3 pull-right">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" id="SearchInput"><i class="glyphicon glyphicon-search" id="SearchIcon"></i></button>
                        </div>
                        <input type="text" class="form-control" placeholder="SEARCH" name="srch-term" id="srch-term">
                    </div>
                </form>
            </div>


        </div><!--/.nav-collapse -->


    </div>
</div>