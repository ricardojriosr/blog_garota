<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 15-08-2016
 * Time: 07:59 PM
 */
?>
<div class="container hidden-xs">
    <br><br>
    <div class="row text-center">

        <div class="col-sm-2 "></div>
        <div class="col-sm-8 entradas-1 ">

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
                <div class="col-sm-3 banner-gris">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container hidden-sm hidden-md hidden-lg ">
    <br><br>
    <div class="row text-center ">



            <div class="container mobile-entrada-a text-center ">
                @foreach($entradaA as $a1)
                    <div class="container entradaA ">
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
                </div>
            </div>


    </div>
</div>

<br><br>
