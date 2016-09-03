<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 15-08-2016
 * Time: 07:57 PM
 */
?>

<br><br>

<div class="container hidden-xs">
    <div class="col-sm-2 text-right  flota-derecha">
        <a href="#" class="jcarousel-control-prev ">
            <img src="{{ asset('images/Back-Vector-256.png') }}" alt="Back" class="img-responsive boton-carrusel c_prev ">
        </a>
    </div>

    <div class="jcarousel-wrapper col-sm-8 bordes-productos text-center">
        <div class="producto-destacado"><strong>FEATURED <br> PRODUCTS</strong></div>
        <!-- Carousel -->
        <div class="jcarousel inicio-productos">
            <ul>
                @foreach($productos as $producto)
                    <li>
                        <div class="col-sm-3 text-leftne">
                        @foreach($producto->images as $image)
                            @if ($image->default == 1)
                                <a href="{{ route('front.view.article',$producto->slug)  }}">
                                    <img src="{{ asset('images/articles/' . $image->name  ) }}" alt="" class="img-responsive img-producto">
                                </a>
                            @endif
                        @endforeach
                        <a href="{{ route('front.view.article',$producto->slug)  }}" class="producto1 OpenSansExtraBold"><h5>{{ $producto->title }}</h5></a>
                        <a href="{{ route('front.view.article',$producto->slug)  }}" class="producto2 OpenSansLight"><h6>
                                <?php
                                $conf = 75;
                                $string = $producto->subtitle;
                                $largo = strlen($string);
                                if ($largo > $conf)
                                {
                                    echo substr($string,0,$conf).'...';
                                }
                                else
                                {
                                    echo $string;
                                }
                                ?>
                            </h6></a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Prev/next controls -->


    </div>

    <div class="col-sm-2 text-left flota-izquierda" >
        <a href="#" class="jcarousel-control-next  ">
            <img src="{{ asset('images/Forward-Vector-256.png') }}" alt="" class="img-responsive boton-carrusel c_next ">
        </a>
    </div>
</div>



<div class="row hidden-md hidden-lg hidden-sm ">
    <div class="col-xs-3 text-right flota-derecha ">
        <a href="#" class="jcarousel-control-prev ">
            <img src="{{ asset('images/Back-Vector-256.png') }}" alt="Back" class="img-responsive boton-carrusel c_prev ">
        </a>
    </div>

    <div class="jcarousel-wrapper col-xs-6 bordes-productos text-center ">
        <div class="producto-destacado-mobile"><strong>FEATURED<br>PRODUCTS</strong></div>
        <!-- Carousel -->
        <div class="jcarousel jcarousel-movil">
            <ul>
                @foreach($productos as $producto)
                    <li>
                        <div class="col-xs-3 text-left sin-padding">
                            @foreach($producto->images as $image)
                                @if ($image->default == 1)
                                    <a href="{{ route('front.view.article',$producto->slug)  }}">
                                        <img src="{{ asset('images/articles/' . $image->name  ) }}" alt="" class="img-responsive img-producto">
                                    </a>
                                @endif
                            @endforeach
                            <a href="{{ route('front.view.article',$producto->slug)  }}" class="producto1 OpenSansExtraBold"><h5>{{ $producto->title }}</h5></a>
                            <a href="{{ route('front.view.article',$producto->slug)  }}" class="producto2 OpenSansLight"><h6>
                                    <?php
                                    $conf = 75;
                                    $string = $producto->subtitle;
                                    $largo = strlen($string);
                                    if ($largo > $conf)
                                    {
                                        echo substr($string,0,$conf).'...';
                                    }
                                    else
                                    {
                                        echo $string;
                                    }
                                    ?>
                                </h6></a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Prev/next controls -->


    </div>

    <div class="col-xs-3 text-left flota-izquierda " >
        <a href="#" class="jcarousel-control-next">
            <img src="{{ asset('images/Forward-Vector-256.png') }}" alt="" class="img-responsive boton-carrusel c_next ">
        </a>
    </div>
</div>


<br>

