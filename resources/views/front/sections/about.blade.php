<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 22-08-2016
 * Time: 06:09 PM
 */
?>
<?php
/*
foreach($favorites as $fav)
{
    echo "<pre>",print_r($fav->article),"</pre>";
}
exit();*/
?>

@extends('front.template.main')

@section('content')

    <br><br>
    <div class="row about-page">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <h2>{{ $about->title }}</h2>
            <br>
            <p class="intro">{{ $about->intro }}</p>
            <br>
            <p class="quote">&#34;{{ $about->quote }}&#34;</p>
            <br>
            <p class="essay">{{ $about->essay }}</p>
            <br>
            <div class="row">
                <div class="col-sm-3  about-button">
                    <a href="#" class="jcarousel-control-prev ">
                        <img src="{{ asset('images/Back-Vector-256.png') }}" alt="Back" class="img-responsive boton-carrusel c_prev ">
                    </a>
                </div>

                <div class="jcarousel-wrapper col-sm-6 bordes-productos text-center">
                    <div class="producto-destacado2"><strong>+ ABOUT ME</strong></div>
                    <br>
                    <!-- Carousel -->
                    <div class="jcarousel">
                        <ul>
                            @foreach($favorites as $favx)

                                    {{ $producto = $favx->article }}
                                    <li>
                                        <div class="col-sm-3 text-leftne">
                                            @foreach($favx->article->images as $image)

                                                @if ($image->default == 1)
                                                    <a href="{{ route('front.view.article',$producto->slug)  }}">
                                                        <img src="{{ asset('images/articles/' . $image->name  ) }}" alt="" class="img-responsive img-producto">
                                                    </a>
                                                @endif
                                            @endforeach
                                            <a href="{{ route('front.view.article',$producto->slug)  }}" class="producto1"><h5>{{ $producto->title }}</h5></a>
                                            <a href="{{ route('front.view.article',$producto->slug)  }}" class="producto2"><h6>
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

                <div class="col-sm-3  about-button" >
                    <a href="#" class="jcarousel-control-next   ">
                        <img src="{{ asset('images/Forward-Vector-256.png') }}" alt="" class="img-responsive boton-carrusel c_next ">
                    </a>
                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <img src="{{ asset('images/about/' . $about->image) }}" alt="About Image Carolina Silva" class="img-responsive">
        </div>
        <div class="col-sm-2"></div>
    </div>
    <br><br><br>

@endsection

@section('js')

    <script type="text/javascript">

        (function($) {
            $(function() {
                /*
                 Carousel initialization
                 */
                $('.jcarousel')
                        .jcarousel({
                            // Options go here
                        });

                /*
                 Prev control initialization
                 */
                $('.jcarousel-control-prev')
                        .on('jcarouselcontrol:active', function() {
                            $(this).removeClass('inactive');
                        })
                        .on('jcarouselcontrol:inactive', function() {
                            $(this).addClass('inactive');
                        })
                        .jcarouselControl({
                            // Options go here
                            target: '-=1'
                        });

                /*
                 Next control initialization
                 */
                $('.jcarousel-control-next')
                        .on('jcarouselcontrol:active', function() {
                            $(this).removeClass('inactive');
                        })
                        .on('jcarouselcontrol:inactive', function() {
                            $(this).addClass('inactive');
                        })
                        .jcarouselControl({
                            // Options go here
                            target: '+=1'
                        });

                /*
                 Pagination initialization
                 */
                $('.jcarousel-pagination')
                        .on('jcarouselpagination:active', 'a', function() {
                            $(this).addClass('active');
                        })
                        .on('jcarouselpagination:inactive', 'a', function() {
                            $(this).removeClass('active');
                        })
                        .jcarouselPagination({
                            // Options go here
                        });
            });
        })(jQuery);

    </script>

@endsection
