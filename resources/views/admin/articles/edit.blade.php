<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24-07-2016
 * Time: 12:20 AM
 */
?>

@extends('admin.template.main')

@section('title','Editar Articulo ' . $article->id)

@section('content')

    

    {!! Form::open(['route' => ['admin.articles.update',$article], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('title','Titulo')!!}
        {!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('subtitle','Sub-titulo')!!}
        {!! Form::text('subtitle', $article->subtitle, ['class' => 'form-control', 'placeholder' => 'Sub-titulo del articulo', 'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('category_id','Categoria')!!}
        {!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control select-category','required', 'data-placeholder' => 'Selecciona una opcion...']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content','Contenido')!!}
        {!! Form::textarea('content', $article->content, ['class' => 'form-control textarea-content', 'placeholder' => 'Contenido del articulo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tags','Tags')!!}
        {!! Form::select('tags[]', $tags, $my_tags, ['tags' => 'id', 'class' => 'form-control select-tag', 'required','multiple']) !!}
    </div>

    <div class="form-group">
        @foreach($images as $image)
            <?php
                $valor = 0;
                if ($image->default == 1) { $valor = 1; }
            ?>
            {{ Form::radio('default', $image->id, $valor) }}
            <img src="{{ asset('images/articles/' . $image->name ) }}" alt="" class="img-responsive img-to-edit">
        @endforeach
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Articulo', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection

@section('js')

    <script>
        $(".select-tag").chosen({
            placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
            max_selected_options: 3,
            search_contains: true,
            no_results_text: 'No se encontraron resultados'
        });

        $(".select-category").chosen({
            placeholder_text_single: 'Seleccione una categoria'
        });

        $('.textarea-content').trumbowyg();




    </script>

@endsection