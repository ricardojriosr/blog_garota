<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24-07-2016
 * Time: 12:20 AM
 */
?>

@extends('admin.template.main')

@section('title','Listado de articulos')

@section('content')

    <a href="{{ route('admin.articles.create') }}" class="btn btn-info">Crear nuevo articulo</a>
    <br>
    <hr>
    <br>
    <!-- BUSCADOR DE ARTICULOS -->
    {!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

    <div class="input-group">
        {!! Form::text('title',null,['class' => 'form-control', 'placeholder' => 'Buscar Articulo..','aria-describedby' => 'search']) !!}
        <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"></span> </span>
    </div>

    {!! Form::close() !!}
            <!-- FIN DEL BUSCADOR -->
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Usuario</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->category->name }}</td>
                <td>{{ $article->user->name }}</td>
                <td>
                    @if ($article->destacado == 0)
                    <a href="{{ route('admin.articles.highlight', $article->id) }}" class="btn btn-info">Destacado</a>
                    @endif
                    @if ($article->entradaA == 0)
                        <a href="{{ route('admin.articles.entrya', $article->id) }}" class="btn btn-success" >Entrada A</a>
                    @endif
                    @if ($article->entradaB == 0)
                        <a href="{{ route('admin.articles.entryb', $article->id) }}" class="btn btn-default" >Entrada B</a>
                    @endif
                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning" ><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                    <a href="{{ route('admin.articles.destroy', $article->id) }}" class="btn btn-danger" onclick="return confirm('Seguro desea elimarlo?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $articles->render() !!}
    </div>
@endsection
