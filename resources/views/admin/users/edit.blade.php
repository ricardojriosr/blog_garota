<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23-07-2016
 * Time: 05:17 PM
 */
?>

@extends('admin.template.main')

@section('tilte','Editar Usuario ' . $user->name)

@section('content')

    {!! Form::model($user, array('route' => array('admin.users.update', $user->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Correo Electronico') !!}
        {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control','placeholder' => 'Seleccione una opcion...','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection
