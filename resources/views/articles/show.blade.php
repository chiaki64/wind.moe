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


            <ul class="am-comments-list am-comments-list-flip">
                <li class="am-comment am-text-sm">
                    <div>
                        <strong>作者</strong>
                        <small>Oct.21 2015 - 我是测试的自我介绍</small>
                    </div>
                    <div>
                        <p  style="margin-bottom:0px;">
                            加油 希望能写出更好的博客.
                        </p>
                    </div>
                </li>

                <li class="am-comment am-text-sm"  >
                    <div>
                        <strong>路人乙</strong>
                        <small>Oct.21/15 - 阿西吧我是测试数据</small>
                    </div>
                    <div>
                        <p  style="margin-bottom:0px;">
                            凑足十五字就没有问问题了吧凑足十五字就没有问问题了吧
                        </p>
                    </div>
                </li>

                <li class="am-comment am-text-sm">
                    <div>
                        <strong>作者</strong>
                        <small>Oct.21 2015 - 自我介绍</small>
                    </div>
                    <div>
                        <p   style="margin-bottom:0px;">
                            加油 希望能写出更好的博客.
                        </p>
                    </div>


                </li>


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
                {!! Form::text('email', null, ['class' => 'form-control am-input-sm','placeholder' => '邮箱','style' => 'border:0px;background:#eee;']) !!}
            </div>
        </div>

        <div class="form-group am-form-group" style="margin-bottom: 0px;">
            <div class="am-u-sm-12 am-u-md-8 am-u-lg-4" style="padding-left: 0px;">
                {!! Form::text('url', null, ['class' => 'form-control am-input-sm','placeholder' => 'URL','style' => 'border:0px;background:#eee;']) !!}
            </div>
        </div>


        <div class="form-group am-form-group" style="margin-bottom: 1.5rem;">
            <div class="am-u-sm-12 am-u-md-8 am-u-lg-10" style="padding-left: 0px;">
                {!! Form::textarea('text', null, ['class' => 'form-control am-input-sm','placeholder' => '评论','style' => 'border:0px;background:#eee;', 'rows'=>'5']) !!}
            </div>
        </div>

        {{--<div class="form-group am-form-group" style="margin-bottom: 1.5rem;">--}}
                {{--<div class="am-u-sm-12 am-u-md-8 am-u-lg-10" style="padding-left: 0px;">--}}
                    {{--{!! Form::textarea('text', null, ['class' => 'form-control am-input-sm','placeholder' => '评论','style' => 'border:0px;background:#eee;', 'rows'=>'5', 'type'=>'hidden' ]) !!}--}}
                {{--</div>--}}
        {{--</div>--}}

        <div class="form-group">
            {!! Form::submit('Add Comment', ['class' => 'btn btn-primary form-control am-btn am-btn-default am-input-sm']) !!}
        </div>
        {!! Form::close() !!}
        </div>



                <!--more -->











    </div>



    @yield('sidebar')



@stop