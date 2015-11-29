<div class="card">
    <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments" style="padding-top: 0;">
        <ul class="comments" style="padding-left: 0px;" id="comment_bar">
        </ul>
        {!! Form::open(['url' => '/comment']) !!}
        @include('article.comment_form')
        {!! Form::close() !!}
    </div>
</div>