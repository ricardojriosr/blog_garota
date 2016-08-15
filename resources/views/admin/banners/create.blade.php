<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 09-08-2016
 * Time: 10:01 AM
 */
?>

@extends('admin.template.main')

@section('title','Crear Banner')

@section('content')

    {!! Form::open(['route' => 'admin.banners.store', 'method' => 'POST', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('article_id','Articulo')!!}
        {!! Form::select('article_id', $articles, null, ['class' => 'form-control select-category','required', 'placeholder' => 'Seleccione un articulo...']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('resumen','Informacion')!!}
        {!! Form::text('resumen', null, ['class' => 'form-control', 'placeholder' => 'Resumen del banner', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('active','Activo')!!}
        {!! Form::checkbox('active',null,['class' => 'checkbox']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('imagen','Imagen')!!}
        {!! Form::file('imagen',['class' => 'file']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Agregar Banner', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection

@section('js')

@endsection