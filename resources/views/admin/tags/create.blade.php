<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23-07-2016
 * Time: 11:08 PM
 */
?>

@extends('admin.template.main')

@section('title','Crear Tag')

@section('content')

    {!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}

    @include('admin.tags.form')

    {!! Form::close() !!}

@endsection
