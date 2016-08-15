<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24-07-2016
 * Time: 12:20 AM
 */
?>

@extends('admin.template.main')

@section('title','Crear Articulo')

@section('content')

    {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}
    {{ csrf_field() }}

    <div class="form-group">
        {!! Form::label('title','Titulo')!!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('subtitle','Sub-titulo')!!}
        {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Sub-titulo del articulo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Categoria')!!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category','required', 'placeholder' => 'Selecciona una opcion...']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content','Contenido')!!}
        {!! Form::textarea('content', null, ['class' => 'form-control textarea-content', 'placeholder' => 'Contenido del articulo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tags','Tags')!!}
        {!! Form::select('tags[]', $tags, null, ['tags' => 'id', 'class' => 'form-control select-tag', 'required','multiple']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image','Imagen')!!}
        {!! Form::file('image[]',['class' => 'file', 'multiple' => 'multiple']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Agregar Articulo', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection

@section('js')

<script>
    $(".select-tag").chosen({
        placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
        max_selected_options: 3,
        search_contains: true,
        no_results_text: 'No se encontraron resultados'
    });


    $('.textarea-content').trumbowyg();



</script>

@endsection