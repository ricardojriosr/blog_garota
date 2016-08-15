<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 31-07-2016
 * Time: 06:57 PM
 */
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Categorias</h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            @foreach($categories as $category)
            <li class="list-group-item">
                <span class="badge">{{ $category->articles->count() }}</span>
                <a href="{{route('front.search.category', $category->name)}}">{{ $category->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Tags</h3>
    </div>
    <div class="panel-body">
        @foreach($tags as $tag)
            <a href="{{route('front.search.tag', $tag->name)}}"><span class="label label-default">{{ $tag->name }}</span></a>
        @endforeach
    </div>
</div>
