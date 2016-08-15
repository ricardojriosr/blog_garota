<div id="carousel-example" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $i = 0; ?>
        @foreach($banners as $banner)
            <?php
            if ($i == 0)
            {
            ?>
                <li data-target="#carousel-example" data-slide-to="{{ $i }}" class="active"></li>
            <?php
            } else {
            ?>
                <li data-target="#carousel-example" data-slide-to="{{ $i }}"></li>
            <?php
            }
            $i++;
            ?>
        @endforeach
    </ol>

    <div class="carousel-inner">
        <?php $j = 0; ?>
        @foreach($banners as $banner)
        <?php
        if ($j == 0)
        {
        ?>
        <div class="item active">
            <a href="{{ route('front.view.article',$banner->article->slug)  }}"><img src="{{ asset('images/banner/' . $banner->imagen) }}" class="img-responsive img-banner" /></a>
            <div class="carousel-caption">
                <h4 class="banner">{{$banner->article->category->name}}</h4>
                <h3 class="banner">{{$banner->article->title}}</h3>
                <p class="banner">{{$banner->article->subtitle}}</p>
            </div>
        </div>
        <?php
        } else {
        ?>
        <div class="item">
            <a href="{{ route('front.view.article',$banner->article->slug)  }}"><img src="{{ asset('images/banner/' . $banner->imagen) }}" class="img-responsive img-banner" /></a>
            <div class="carousel-caption">
                <h4 class="banner">{{$banner->article->category->name}}</h4>
                <h3 class="banner">{{$banner->article->title}}</h3>
                <p class="banner">{{$banner->article->subtitle}}</p>
            </div>
        </div>
        <?php
        }
        $j++;
        ?>
        @endforeach
    </div>

    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<br>
<div class="row text-center">
    <div class="col-sm-2"></div>
    <?php $k = 0; ?>
    @foreach($banners as $banner)
    <div id="banner_<?php echo $k; ?>" class="col-sm-2 text-center mini-banner <?php if ($k == 0) { ?> mini-banner-activo <?php }  ?>">

        <center>
        @foreach($banner->article->images as $image)
            @if ($image->default == 1)
                <a href="{{ route('front.view.article',$banner->article->slug)  }}">
                    <img src="{{ asset('images/banner/' . $banner->imagen) }}" alt="{{$banner->article->title}}" class="img-responsive img-mini-banner">
                </a>
                    <a href="{{route('front.search.category', $banner->article->category->name)}}">
                        <h5 class="text-left cat-mini-banner">{{$banner->article->category->name}}</h5>
                    </a>
                    <a href="{{ route('front.view.article',$banner->article->slug)  }}">
                        <h3 class="text-left tit-mini-banner">{{$banner->article->title}}</h3>
                    </a>
            @endif
        </center>
        @endforeach
        <?php $k = $k+1; ?>
    </div>
    @endforeach
    <div class="col-sm-2"></div>
</div>
<br>
@section('js')
    <script>
        $(function () {
            var elem = 0;
            $('#carousel-example').bind('slide.bs.carousel', function (e) {
                var cantidad = $(".mini-banner").length;
                console.log(cantidad);
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
                console.log(elem);
            });
        });
    </script>
@endsection