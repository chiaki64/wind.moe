@extends('manage_layout')

@section('content')
    <div class="card">
    @foreach($articles as $article)

            <div class="mdl-color-text--grey-500"><a class="title" href="/article/{{ $article->id }}">{{ $article->title }}</a>
            <small>{{ $article->published_at }}</small>
            <a href="/manage/article/{{ $article->id }}/edit">Edit</a>
            </div>

            <hr>
    @endforeach
    </div>

    <script>

    </script>

@stop