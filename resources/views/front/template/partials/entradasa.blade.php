<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 15-08-2016
 * Time: 07:59 PM
 */
?>
<div class="container">
    <br><br>
    <div class="row text-center">

        <div class="col-sm-2 hidden-sm"></div>
        <div class="col-sm-8 entradas-1 hidden-sm">

            <div class="row xparent">
                @foreach($entradaA as $a1)
                    <div class="col-sm-9 entradaA">
                        @foreach($a1->images as $image)
                            @if ($image->default == 1)
                                <a href="{{ route('front.view.article',$a1->slug)  }}"><img src="{{ asset('images/articles/' . $image->name  ) }}" alt="{{$a1->title}}" class="img-responsive img-entradaA"></a>
                            @endif
                            <br>
                            <a href="{{route('front.search.category', $a1->category->name)}}"><h5 class="text-left h5entradaa">{{$a1->category->name}}</h5></a>
                            <a href="{{ route('front.view.article',$a1->slug)  }}" class="h3entradaa"><h3 class="text-left h3entradaa2">{{$a1->title}}</h3></a>
                            <a href="{{ route('front.view.article',$a1->slug)  }}" class="pentradaa"><p class="text-left pentradaa2">{{$a1->subtitle}}</p></a>
                        @endforeach
                    </div>
                @endforeach
                <div class="col-sm-3 banner-gris hidden-sm">
                </div>
            </div>
        </div>
        <div class="col-sm-2 hidden-sm"></div>

        <div class="row hidden-md hidden-lg">
            @foreach($entradaA as $a1)

                    @foreach($a1->images as $image)
                        @if ($image->default == 1)
                            <a href="{{ route('front.view.article',$a1->slug)  }}"><img src="{{ asset('images/articles/' . $image->name  ) }}" alt="{{$a1->title}}" class="img-responsive img-entradaA"></a>
                        @endif
                        <br>
                        <a href="{{route('front.search.category', $a1->category->name)}}"><h5 class="text-left h5entradaa">{{$a1->category->name}}</h5></a>
                        <a href="{{ route('front.view.article',$a1->slug)  }}" class="h3entradaa"><h3 class="text-left h3entradaa2">{{$a1->title}}</h3></a>
                        <a href="{{ route('front.view.article',$a1->slug)  }}" class="pentradaa"><p class="text-left pentradaa2">{{$a1->subtitle}}</p></a>
                    @endforeach

            @endforeach
        </div>

    </div>


</div>
<br><br>
