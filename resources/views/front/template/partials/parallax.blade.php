<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 14-08-2016
 * Time: 11:22 PM
 */
?>

<div class="image_prlx">
    @foreach($parallax as $px)
        @foreach($px->images as $img)
            @if ($img->default == 1)
                <a href="{{ route('front.view.article',$px->slug) }}"><img src="{{ asset('images/articles/' . $img->name) }}" alt="{{ $px->title }}" class="img-responsive"></a>
            @endif
        @endforeach
    <div class="h2_parallax">
        <a href="{{ route('front.view.article',$px->slug) }}" class="p_parallax"><p>{{  date("d F Y", strtotime($px->created_at)) }}</p></a>
        <a href="{{route('front.search.category', $px->category->name)}}" class="h5_parallax"><h5>{{ $px->category->name }}</h5></a>
        <a href="{{ route('front.view.article',$px->slug) }}" class="h3_parallax"><h3>{{ $px->title }}</h3></a>
    </div>

    @endforeach
</div>