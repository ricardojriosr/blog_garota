<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>{{ $article->title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<html>
HOLA CODIGOFACILITO

<br><br>
<h1>{{ $article->title }}</h1>
<hr>
{{ $article->content }}
<hr>
{{ $article->user->name }} | {{ $article->category->name  }} |
@foreach($article->tags as $tags)
    {{ $tags->name }}
@endforeach


</html>