@extends('manage_layout')

@section('content')
    <div class="card">
        @foreach($comments as $comment)

            <div class="mdl-color-text--grey-500"><a href="/article/{{ $comment->pid }}">Article {{ $comment->pid }}</a>
                <small>{{ $comment->published_at }}</small>
                <p>{{ $comment->text }}</p>
            </div>

            <hr>
        @endforeach
    </div>

@stop