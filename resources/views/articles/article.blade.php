@extends('sidebar')

@section('content')
    <div class="am-container am-u-lg-8 am-u-md-9">
        <div>
            <!--Breadcrumb-->
            <ol class="am-breadcrumb">
                <li><a href="#">Home</a>
                </li>
            </ol>

            <div style="margin-top:60px"></div>
            @foreach($articles as $article)
            <div class="am-article">
                <h3 class="am-article-title blog-title am-text-center">
                    <a href="/articles/{{$article->id}}" style="">{{ $article->title }}</a></h3>
                <h4 class="am-article-meta blog-meta am-text-center" style="margin-top:-10px;color:#888;"><?php echo date('M.d Y',strtotime($article->published_at)); ?> under<a href="#">{{ $article->category }}</a></h4>

                <div>
                    <p>{!! $article->text !!}</p>
                </div>

                <p class="am-text-center"><a href="/articles/{{$article->id}}" class="am-text-lg">-More-</a>
                </p>
                <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
            </div>
            @endforeach



        </div>
        <div style="margin-top:50px;">
            <p class="am-text-center"><a href="###" class="am-text-lg">-Load More Article-</a>
        </div>
    </div>



    @yield('sidebar')



@stop