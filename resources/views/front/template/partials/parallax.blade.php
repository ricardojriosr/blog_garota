<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 14-08-2016
 * Time: 11:22 PM
 */
?>

<div class="row">
    @foreach($parallax as $px)
        <div class="item">
        @foreach($px->images as $img)
            @if ($img->default == 1)
                <a href="{{ route('front.view.article',$px->slug) }}"><img src="{{ asset('images/articles/' . $img->name) }}" alt="{{ $px->title }}" class="img-responsive img-parallax"></a>
            @endif
            <div class="text-right info-parallax">
                <a href="{{ route('front.view.article',$px->slug) }}" class="p_parallax"><p>{{  $px->created_at }}</p></a>
                <a href="{{route('front.search.category', $px->category->name)}}" class="h5_parallax"><h5>{{ $px->category->name }}</h5></a>
                <a href="{{ route('front.view.article',$px->slug) }}" class="h3_parallax"><h3>{{ $px->title }}</h3></a>
                <hr class="hr_parallax">
            </div>
        @endforeach
        </div>
    @endforeach
</div>
