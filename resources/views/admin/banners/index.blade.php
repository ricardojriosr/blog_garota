<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 09-08-2016
 * Time: 09:39 AM
 */
?>

@extends('admin.template.main')

@section('title','Lista de Banners')

@section('content')

    <a href="{{ route('admin.banners.create') }}" class="btn btn-info">Registrar nuevo Banner</a>
    <br>
    <hr>
    <br>
    <!-- BUSCADOR DE BANNERS -->
    {!! Form::open(['route' => 'admin.banners.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

    <div class="input-group">
        {!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Buscar Banner..','aria-describedby' => 'search']) !!}
        <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"></span> </span>
    </div>

    {!! Form::close() !!}
            <!-- FIN DEL BUSCADOR -->
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Accion</th>
        </thead>
        <tbody>
        @foreach($banners as $banner)
            <tr>
                <td>{{ $banner->id }}</td>
                <td>{{ $banner->resumen }}</td>
                <td>{{ $banner->article->name }}</td>
                <td><a href="{{ route('admin.banners.edit', $banner->id) }}" class="btn btn-warning" ><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                    <a href="{{ route('admin.banners.destroy', $banner->id) }}" class="btn btn-danger" onclick="return confirm('Seguro desea elimarlo?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $banners->render() !!}
    </div>

@endsection
