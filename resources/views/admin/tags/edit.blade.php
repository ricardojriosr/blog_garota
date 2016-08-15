<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23-07-2016
 * Time: 11:09 PM
 */
?>
@extends('admin.template.main')

@section('title','Editar Tag ' . $tag->name)

@section('content')

    {!! Form::model($tag, array('route' => array('admin.tags.update', $tag->id), 'method' => 'PUT')) !!}

    @include('admin.tags.form')

    {!! Form::close() !!}

@endsection
