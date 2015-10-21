@extends('sidebar')

@section('content')
    <div class="am-container am-u-lg-8 am-u-md-9">
        <div id="add_more">
            <!--Breadcrumb-->
            <ol class="am-breadcrumb">
                <li><a href="/">Home</a>
                </li>
            </ol>

            <div style="margin-top:60px"></div>




        </div>
        <div style="margin-top:50px;">
            <p class="am-text-center" id="load_more"><a href="javascript:void(0)" class="am-text-lg" onclick="getCategoryJson('daily')">-Load More Article-</a></p>
        </div>
    </div>



    @yield('sidebar')



@stop