@extends('sidebar')

@section('content')
    <div class="am-container am-u-lg-8 am-u-md-9">
        <div>
            <!--Breadcrumb-->
            <ol class="am-breadcrumb">
                <li><a href="/" class="am-icon-home">Home</a>
                </li>
                <li><a href="{{ strtolower($article->category) }}">{{ ucfirst($article->category) }}</a>
                </li>
                <li class="am-active">{{ $article->title }}</li>
            </ol>

            <div style="margin-top:60px"></div>

                <div class="am-article">
                    <h3 class="am-article-title blog-title am-text-center">
                        <a href="#" style="">{{ $article->title }}</a></h3>
                    <h4 class="am-article-meta blog-meta am-text-center" style="margin-top:-10px;color:#888;">Oct.15 2015 under <a href="{{ $article->category }}"> {{ $article->category }}</a></h4>
                    <div>
                        <p>{!!  $article->text !!}</p>
                    </div>
                </div>
        </div>

        <div id="comments" style="margin-top:100px;">
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default">
            <ul class="am-comments-list am-comments-list-flip" id="comment_bar">

            </ul>

        </div>
        <!--more -->
        <div style="margin-top:50px;">
        {!! Form::open(['class'=>'am-form am-form-horizontal', 'action'=>'WindController@api_post_comments']) !!}
        <div class="form-group am-form-group" style="margin-bottom: 0px;">
            <div class="am-u-sm-12 am-u-md-8 am-u-lg-4" style="padding-left: 0px;">
                {!! Form::text('author', null, ['class' => 'form-control am-input-sm','placeholder' => '昵称','style' => 'border:0px;background:#eee;']) !!}
            </div>
        </div>

        <div class="form-group am-form-group" style="margin-bottom: 0px;">
            <div class="am-u-sm-12 am-u-md-8 am-u-lg-4" style="padding-left: 0px;">
                {!! Form::text('mail', null, ['class' => 'form-control am-input-sm','placeholder' => '邮箱','style' => 'border:0px;background:#eee;']) !!}
            </div>
        </div>

        <div class="form-group am-form-group" style="margin-bottom: 0px;">
            <div class="am-u-sm-12 am-u-md-8 am-u-lg-4" style="padding-left: 0px;">
                {!! Form::text('mark', null, ['class' => 'form-control am-input-sm','placeholder' => '自我介绍『可选』','style' => 'border:0px;background:#eee;']) !!}
            </div>
        </div>

        <div class="form-group am-form-group" style="margin-bottom: 0px;">
            <div class="am-u-sm-12 am-u-md-8 am-u-lg-4" style="padding-left: 0px;">
                {!! Form::text('url', null, ['class' => 'form-control am-input-sm','placeholder' => 'URL『可选』','style' => 'border:0px;background:#eee;']) !!}
            </div>
        </div>

        <div class="form-group am-form-group" style="margin-bottom: 1.5rem;">
            <div class="am-u-sm-12 am-u-md-8 am-u-lg-10" style="padding-left: 0px;">
                {!! Form::textarea('text', null, ['class' => 'form-control am-input-sm','placeholder' => '评论','style' => 'border:0px;background:#eee;', 'rows'=>'5']) !!}
            </div>
        </div>

        <div class="form-group am-form-group" style="margin-bottom: 0px;">
            <div class="am-u-sm-12 am-u-md-8 am-u-lg-4" style="padding-left: 0px;">
                <input type="hidden"  name="pid" class="form-control am-input-sm" value="{{ $article->id }}">
            </div>
        </div>

        <div class="form-group am-form-group" style="margin-bottom: 0px;">
            <div class="am-u-sm-12 am-u-md-8 am-u-lg-4" style="padding-left: 0px;">
                <input type="hidden" id="need_agent" name="agent" class="form-control am-input-sm" value="">
            </div>
        </div>

        <div class="form-group">
            {!! Form::submit('Add Comment', ['class' => 'btn btn-primary form-control am-btn am-btn-default am-input-sm','onclick'=>'subClick()','id'=>'subButton']) !!}
        </div>
        {!! Form::close() !!}
        </div>

        <script>
            document.onreadystatechange = subSomething;
            function subSomething() {
                if(document.readyState == "complete")
                    wind_comments({{ $article->id }})
            }
            function subClick(){
                document.getElementById("subButton").value="提交中...莫慌";
            }
        </script>
                <!--more -->

    </div>



    @yield('sidebar')



@stop