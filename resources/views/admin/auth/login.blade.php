<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23-07-2016
 * Time: 07:37 PM
 */
?>

@extends('admin.template.main')

@section('title','Login')

@section('content')

{!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('email','Correo Electronico') !!}
        {!! Form::email('email',null,['class' => 'form-control', 'placeholder' => 'example@mail.com']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Clave') !!}
        {!! Form::password('password',['class' => 'form-control', 'placeholder' => '*******']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Acceder',['class' => 'btn btn-default']) !!}
    </div>

{!! Form::close() !!}

@endsection
