<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23-07-2016
 * Time: 05:50 PM
 */
?>
@extends('admin.template.main')

@section('title','Agregar Categoria')

@section('content')

    {!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('name','Nombre')!!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@endsection