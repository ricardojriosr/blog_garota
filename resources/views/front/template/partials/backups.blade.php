<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 16-08-2016
 * Time: 08:43 AM
 */
?>
<div class="container">
    <div class="col-sm-2"></div>
    <div id="productos_carrusel" class="col-sm-8 bordes-productos text-center carousel">
        <a href="#" class="prev">&lsaquo;</a>
        <div class="producto-destacado"><strong>PRODUCTOS DESTACADOS</strong></div>
        <ul>
            @foreach($productos as $producto)
                <li>

                    <div class="col-sm-4 text-left">

                        @foreach($producto->images as $img)
                            @if ($img->default == 1)
                                <a href="{{ route('front.view.article',$producto->slug)  }}">
                                    <img src="{{ asset('images/articles/' . $img->name  ) }}" alt="" class="img-responsive img-producto">
                                </a>
                            @endif
                        @endforeach
                        <a href="{{ route('front.view.article',$producto->slug)  }}" class="producto1"><h5>{{ $producto->title }}</h5></a>
                        <a href="{{ route('front.view.article',$producto->slug)  }}" class="producto2"><h6><?php echo substr($producto->subtitle,0,75).'...' ?></h6></a>

                    </div>

                </li>
            @endforeach
        </ul>
        <a href="#" class="next">&rsaquo;</a>
        <div class="clear"></div>
    </div>
    <div class="col-sm-2"></div>
</div>
<br>

