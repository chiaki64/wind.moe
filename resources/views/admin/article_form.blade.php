<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('title', 'Title:',['class' => 'mdl-textfield__label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control mdl-textfield__input']) !!}
</div>

<div id="add_id" class="form-group">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control','id'=>'editor']) !!}
</div>

<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('tags', 'Tags',['class' => 'mdl-textfield__label']) !!}
    {!! Form::text('tags', null, ['class' => 'form-control mdl-textfield__input']) !!}
</div>

<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('author', '作者：',['class' => 'mdl-textfield__label']) !!}
    {!! Form::text('author', null, ['class' => 'form-control mdl-textfield__input']) !!}
</div>

<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('category', 'Category',['class' => 'mdl-textfield__label']) !!}
    {!! Form::text('category', null, ['class' => 'form-control mdl-textfield__input']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control  mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect']) !!}
</div>