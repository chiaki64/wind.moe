<div style="width:250px;height: 40px;">
    <div class="mdl-textfield mdl-js-textfield">
        {!! Form::label('author', 'Author',['class' => 'mdl-textfield__label']) !!}
        {!! Form::text('author', null, ['class' => 'form-control mdl-textfield__input']) !!}
    </div>
</div>
<div style="width:250px;height: 40px;">
    <div class="mdl-textfield mdl-js-textfield">
        {!! Form::label('email', 'Mail',['class' => 'mdl-textfield__label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control mdl-textfield__input']) !!}
    </div>
</div>

<div style="width:250px;height: 40px;">
    <div class="mdl-textfield mdl-js-textfield">
        {!! Form::label('url', 'URL',['class' => 'mdl-textfield__label']) !!}
        {!! Form::text('url', null, ['class' => 'form-control mdl-textfield__input']) !!}
    </div>
</div>

<div style="width:100%;">
    <div class="mdl-textfield mdl-js-textfield" style="width: 100%;">
        {!! Form::label('text', 'Comment',['class' => 'mdl-textfield__label']) !!}
        {!! Form::textarea('text', null, ['class' => 'form-control mdl-textfield__input','rows' => 5]) !!}
    </div>
</div>

<div style="width:100%;">
    <input type="hidden" name="pid" class="form-control am-input-sm" value="{{ $article->id }}">
</div>


<div class="form-group">
    {!! Form::submit("Add Comment", ['class' => 'btn btn-primary form-control mdl-button mdl-js-button mdl-button--primary']) !!}
</div>