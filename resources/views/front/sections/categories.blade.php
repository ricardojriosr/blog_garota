<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 19-08-2016
 * Time: 09:29 AM
 */
?>
@extends('front.template.main')

@section('content')

    <div class="hidden-xs">
        @foreach($articles as $article)
            <div class="row container-category">
            <div class="col-sm-2 "></div>
            <div class="col-sm-8 text-center">
                <div class="row">
                    <h5>{{ $article->category->name }}</h5>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <hr class="hr-title"/>
                    </div>
                    <div class="col-sm-6">
                        <h3>{{ $article->title }}</h3>
                    </div>
                    <div class="col-sm-3">
                        <hr class="hr-title"/>
                    </div>
                </div>
                <div class="row">
                    <p>{{ date("d F Y", strtotime($article->created_at)) }}</p>
                </div>
                <div class="container-category2">
                    @foreach($article->images as $img)
                        @if ($img->default == 1)
                            <img src="{{ asset('images/articles/' . $img->name  ) }}" alt="{{ $article->slug }}-Default" class="img-responsive">
                        @endif
                    @endforeach
                    <p>{{ $article->subtitle }}</p>
                    <p class="enlace">
                        <span class="read-more">
                          <a href="{{ route('front.view.article',$article->slug) }}">Read More</a>
                        </span></p>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        @endforeach
        <div class="row text-center">
            {{ $articles->render() }}
        </div>
    </div>

    <div class="hidden-sm hidden-md hidden-lg">
        @foreach($articles as $article)
            <div class="row container-category container-category-mobile">
                <div class="col-xs-2 "></div>
                <div class="col-xs-8 text-center">
                    <div class="row">
                        <h5>{{ $article->category->name }}</h5>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <hr class="hr-title"/>
                        </div>
                        <div class="col-xs-6">
                            <h3>{{ $article->title }}</h3>
                        </div>
                        <div class="col-xs-3">
                            <hr class="hr-title"/>
                        </div>
                    </div>
                    <div class="row">
                        <p>{{ date("d F Y", strtotime($article->created_at)) }}</p>
                    </div>
                    <div class="container-category2">
                        @foreach($article->images as $img)
                            @if ($img->default == 1)
                                <img src="{{ asset('images/articles/' . $img->name  ) }}" alt="{{ $article->slug }}-Default" class="img-responsive">
                            @endif
                        @endforeach
                        <p>{{ $article->subtitle }}</p>
                        <p class="enlace">
                        <span class="read-more">
                          <a href="{{ route('front.view.article',$article->slug) }}">Read More</a>
                        </span></p>
                    </div>
                </div>
                <div class="col-xs-2"></div>
            </div>
        @endforeach
        <div class="row text-center">
            {{ $articles->render() }}
        </div>
    </div>




@endsection
