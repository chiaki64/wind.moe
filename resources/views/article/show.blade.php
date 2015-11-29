@extends('layout')

@section('content')

    <div class="card">
        <div class="title mdl-color-text--grey-500">{{ $article->title }}</div>
        <div class="date">{{ $article->author }} - {{ $article->published_at }}</div>
        <hr>
        <div>
            {!! $article->text !!}
        </div>
    </div>

    @include('article.comment')

    <script>
        document.onreadystatechange = subSomething;
        function subSomething() {
            if(document.readyState == "complete")
                wind_comments({{ $article->id }})
        }
    </script>

@stop