<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24-07-2016
 * Time: 10:30 PM
 */
?>
@extends('front.template.main')

@section('content')



<?php
if (Route::getCurrentRoute()->getActionName() == 'App\Http\Controllers\FrontController@index') {
?>

@include('front.template.partials.banner')

@include('front.template.partials.entradasa')

@include('front.template.partials.parallax')

@include('front.template.partials.products')

@include('front.template.partials.entradasb')

<?php
}
?>
<?php
if (Route::getCurrentRoute()->getActionName() == 'App\Http\Controllers\FrontController@searchCategory') {
?>

@include('front.sections.categories')

<?php
}
?>


@endsection

@section('js')
    <script type="text/javascript">

        $(function () {
            var feed = new Instafeed({
                clientId: '0b32df656196458db33a437a109f7b08'
            });
            feed.run();
        });

        $(function () {
            var elem = 0;
            $('#carousel-example').bind('slide.bs.carousel', function (e) {
                var cantidad = $(".mini-banner").length;

                for (i =0; i < cantidad; i++) {
                    $("#banner_" + i).removeClass("mini-banner-activo");
                }
                elem++;
                if (elem == cantidad) {
                    elem = 0;
                    $("#banner_" + elem ).addClass("mini-banner-activo");
                } else {
                    $("#banner_" + elem ).addClass("mini-banner-activo");
                }

            });
        });


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
