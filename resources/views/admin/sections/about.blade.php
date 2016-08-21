<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 20-08-2016
 * Time: 11:45 PM
 */
?>
@extends('admin.template.main')

@section('title','Section About')

@section('content')

    {!! Form::model($about, array('route' => array('admin.about.update', $about->id), 'method' => 'PUT', 'files' => true)) !!}

    <div class="form-group">
        {{ Form::label('title','Titulo') }}
        {{ Form::text('title',$about->title,['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group">
        {{ Form::label('intro','Introduccion') }}
        {{ Form::text('intro',$about->intro,['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group">
        {{ Form::label('quote','Cita') }}
        {{ Form::text('quote',$about->quote,['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group">
        {{ Form::label('essay','Desarrollo') }}
        {{ Form::text('essay',$about->essay,['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group">
        {!! Form::label('favorites','Favoritos')!!}
        {!! Form::select('favorites[]', $articles, $favorites, ['id' => 'favorites', 'class' => 'form-control select-tag', 'required','multiple']) !!}
    </div>

    @if ($about->image != '')
        <div class="form-group">
            <img src="{{ asset('images/about/' . $about->image) }}" alt="Imagen de Sobre" class="img-responsive" style="height: 200px">
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('image','Imagen')!!}
        {!! Form::file('image',['class' => 'file']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary','required']) !!}
    </div>

    {!! Form::close() !!}

@endsection

@section('js')

    <script>
        $(".select-tag").chosen({
            placeholder_text_multiple: 'Seleccione los articulos favoritos',
            max_selected_options: 3,
            search_contains: true,
            no_results_text: 'No se encontraron resultados'
        });


        $('.textarea-content').trumbowyg();



    </script>

@endsection