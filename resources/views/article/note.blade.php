@extends('layout')

@section('content')

    @foreach($notes as $note)
        <div class="card">
            <div class="date">{{ $note->author }} -> {{ $note->published_at }}</div>
            <hr>
            <div>
                {!! $note->text !!}
            </div>
        </div>
    @endforeach

@stop