@extends('main')

@section('sidebar')
    <h1>Edit</h1>

    <hr/>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['WindController@update', $article->id]]) !!}
    <div class="form-group am-form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control am-form-field am-radius']) !!}
    </div>

    <div id="add_id" class="form-group am-form-group">
        {!! Form::label('text', 'Text:') !!}
        {!! Form::textarea('text', null, ['class' => 'form-control','id'=>'editor']) !!}
    </div>

    <div class="form-group am-form-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::text('tags', null, ['class' => 'form-control am-form-field am-radius']) !!}
    </div>

    <div class="form-group am-form-group">
        {!! Form::label('author', '作者：') !!}
        {!! Form::text('author', null, ['class' => 'form-control am-form-field am-radius']) !!}
    </div>

    <div class="form-group am-form-group">
        {!! Form::label('category', 'Category：essay/code/daily') !!}
        {!! Form::text('category', null, ['class' => 'form-control am-form-field am-radius']) !!}
    </div>

    <div class="form-group am-form-group">
        {!! Form::submit('Edit Article', ['class' => 'btn btn-primary form-control am-btn am-btn-default']) !!}
    </div>
    {!! Form::close() !!}


    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <script>
            var a=document.getElementById("add_id");
            a.getElementsByTagName("textarea").id="editor"
    </script>

@stop