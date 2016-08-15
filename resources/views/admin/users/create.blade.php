<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 21-07-2016
 * Time: 10:10 AM
 */
?>
@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')



    {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Contrase&ntilde;a') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*******', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type', [ 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control','placeholder' => 'Seleccione una opcion...','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@endsection
