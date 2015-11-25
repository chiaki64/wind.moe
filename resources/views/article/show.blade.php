@extends('layout')

@section('content')

    <div class="card">
        <div class="title mdl-color-text--grey-500">{{ $article->title }}</div>
        <div class="date">{{ $article->author }} - {{ $article->published_at }}</div>
        <hr>
        <div>
            {!! $article->text !!}
            <div><a href="#">Continued Reading...</a></div>
        </div>
    </div>

@stop