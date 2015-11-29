@extends('manage_layout')

@section('content')

    <div class="card">
        <h4>Edit Article</h4>
        <hr/>
        {!! Form::open(['url' => '/articles']) !!}
        @include('admin.article_form', ['submitButtonText' => 'Add Article'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>

@stop