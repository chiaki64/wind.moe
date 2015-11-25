@extends('layout')

@section('content')

    @foreach($articles as $article)
    <div class="card">
        <div class="title mdl-color-text--grey-500">{{ $article->title }}
        </div>
        <div class="date">{{ $article->author }} - {{ $article->published_at }}</div>
        <hr>
        <div>
            {!! $article->text !!}
            <div><a href="#">Continued Reading...</a>
            </div>
        </div>
    </div>
    @endforeach
@stop