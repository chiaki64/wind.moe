@extends('manage_layout')

@section('content')

    <div class="card">
        <h4>Edit</h4>
        <hr/>
        {!! Form::model($article, ['method' => 'PATCH', 'action' => ['WindController@update', $article->id]]) !!}
        @include('admin.article_form', ['submitButtonText' => 'Update Article'])
        {!! Form::close() !!}
        @include('errors.list')
    </div>

@stop