<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 16-08-2016
 * Time: 04:28 PM
 */
?>

<div class="container hidden-sm">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        @foreach($entradaB as $eb)
        <div class="col-sm-6">
            @foreach($eb->images as $img)
                @if ($img->default == 1)
                    <a href="{{ route('front.view.article',$eb->slug)  }}">
                        <img src="{{ asset('images/articles/' . $img->name  ) }}" alt="{{ $eb->title }}" class="img-responsive img-entradab">
                    </a>
                @endif
            @endforeach
            <a href="{{route('front.search.category', $eb->category->name)}}"><h5 class="text-left h5entradaa margen-cero">{{$eb->category->name}}</h5></a>
            <a href="{{ route('front.view.article',$eb->slug)  }}" class="h3entradaa"><h3 class="text-left h3entradaa2 margen-cero" >{{$eb->title}}</h3></a>
            <a href="{{ route('front.view.article',$eb->slug)  }}" class="pentradaa"><p class="text-left pentradaa2 margen-cero">
                    <?php echo substr($eb->subtitle,0,75).'...' ?>
                </p></a>
        </div>
        @endforeach
    </div>
    <div class="col-sm-2"></div>

</div>

<div class="container hidden-lg hidden-md">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <?php $i = 0; ?>
        @foreach($entradaB as $eb)

            <div class="row">
                @foreach($eb->images as $img)
                    @if ($img->default == 1)
                        <a href="{{ route('front.view.article',$eb->slug)  }}">
                            <img src="{{ asset('images/articles/' . $img->name  ) }}" alt="{{ $eb->title }}" class="img-responsive img-entradab-movil">
                        </a>
                    @endif
                @endforeach
                <a href="{{route('front.search.category', $eb->category->name)}}"><h5 class="text-left h5entradaa margen-cero">{{$eb->category->name}}</h5></a>
                <a href="{{ route('front.view.article',$eb->slug)  }}" class="h3entradaa"><h3 class="text-left h3entradaa2 margen-cero" >{{$eb->title}}</h3></a>
                <a href="{{ route('front.view.article',$eb->slug)  }}" class="pentradaa"><p class="text-left pentradaa2 margen-cero">
                        <?php echo substr($eb->subtitle,0,75).'...' ?>
                    </p></a>
            </div>

            <?php $i++; ?>
        @endforeach
    </div>
    <div class="col-sm-1"></div>

</div>

<br>
