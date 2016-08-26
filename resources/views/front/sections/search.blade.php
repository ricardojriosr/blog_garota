<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 19-08-2016
 * Time: 10:00 PM
 */
?>
@extends('front.template.main')

@section('content')

<div class="hidden-sm">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="col-sm-5 ">
                <hr class="hr-title"/>
            </div>
            <div class="col-sm-2 text-center search-title ">
                <h3>SEARCH</h3>
            </div>
            <div class="col-sm-5 ">
                <hr class="hr-title"/>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-center">
            <br><br>
            @foreach($words as $word)
                <span class="palabras">{{ $word }}</span>
            @endforeach
            <br><br>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <?php $i = 0; ?>

            @foreach($articles as $article)
                    <?php if (($i%3== 0) || ($i == 0)) { echo "<div class='row '>"; } ?>
            <div class="col-sm-4  sin-padding">
                <div class="search-container text-center ">
                @foreach($article->images as $img)
                    @if($img->default == 1)
                        <img src="{{ asset('images/articles/' . $img->name  ) }}" alt="{{ $article->slug }}-Default" class="img-responsive">
                    @endif
                @endforeach

                    <h5>{{ $article->category->name }}</h5>
                    <h3>{{ $article->title }}</h3>
                    <p class="text-left subtitle">
                        <?php
                        $conf = 40;
                        $string = $article->subtitle;
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
                    </p>
                    <p class="posicion-abajo">
                        <span class="read-more ">
                          <a href="{{ route('front.view.article',$article->slug) }}">Read More</a>
                        </span>
                    </p>

                </div>
            </div>

             <?php $i++; ?>
                        <?php if ($i%3== 0) { echo "</div>"; } ?>
             @endforeach
        </div>
        <div class="col-sm-2"></div>
    </div>

</div>

<div class="hidden-md hidden-lg">
    <div class="row">

        <div class="row">
            <div class="col-sm-5 ">
                <hr class="hr-title"/>
            </div>
            <div class="col-sm-2 text-center search-title ">
                <h3>SEARCH</h3>
            </div>
            <div class="col-sm-5 ">
                <hr class="hr-title"/>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-center">
            <br><br>
            @foreach($words as $word)
                <span class="palabras">{{ $word }}</span>
            @endforeach
            <br><br>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="row">

        <div class="col-sm-12">
            @foreach($articles as $article)
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="search-container text-center">
                        @foreach($article->images as $img)
                            @if($img->default == 1)
                                <img src="{{ asset('images/articles/' . $img->name  ) }}" alt="{{ $article->slug }}-Default" class="img-responsive">
                            @endif
                        @endforeach

                        <h5>{{ $article->category->name }}</h5>
                        <h3>{{ $article->title }}</h3>
                        <p class="text-left subtitle">
                            <?php
                            $conf = 130;
                            $string = $article->subtitle;
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
                        </p>
                        <p class="posicion-abajo">
                        <span class="read-more">
                          <a href="{{ route('front.view.article',$article->slug) }}">Read More</a>
                        </span>
                        </p>

                    </div>
                </div>
                <div class="col-sm-1"></div>
            @endforeach
        </div>

    </div>
</div>


@endsection
