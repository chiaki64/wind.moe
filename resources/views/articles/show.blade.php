@extends('sidebar')

@section('content')
    <div class="am-container am-u-lg-8 am-u-md-9">
        <div>
            <!--Breadcrumb-->
            <ol class="am-breadcrumb">
                <li><a href="#">Home</a>
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

    </div>



    @yield('sidebar')



@stop