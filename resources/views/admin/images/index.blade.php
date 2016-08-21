<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24-07-2016
 * Time: 08:25 PM
 */
?>
@extends('admin.template.main')

@section('title','Galeria de Imagenes')

@section('content')

    <div class="row">
        @foreach($images as $image)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body text-center galeria-admin" style="height: 300px !important;">
                        <img src="{{ asset('images/articles/' . $image->name) }}" alt="" class="img-responsive" style="width: 100% !important;" >
                    </div>
                    <div class="panel-footer">
                        {{ $image->article->title }}
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="text-center">
        {{ $images->render() }}
    </div>

@endsection
