<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23-07-2016
 * Time: 06:40 PM
 */
?>
@extends('admin.template.main')

@section('title','Editar Categoria ' . $category->name)

@section('content')

    {!! Form::model($category, array('route' => array('admin.categories.update', $category->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection
