@extends('layout')

@section('content')

    <div class="card">
        <div class="title mdl-color-text--grey-500">About Me</div>
        <div class="date">稗田千秋 - Oct.21 2015</div>
        <hr>
        <div>
            <strong>关于我</strong>
            <div id="status">当前离线</div>
            <p>

            </p>


            <strong>关于WindCore</strong>
            <br>目前的版本号是 WindCore Alpha V2.0 Lime，基于 Laravel Web Framework 开发的一个迷你博客.
            <br>未来将会采用 Python 对 WindCore 进行重构.
            <br>


        </div>
    </div>
    <script>window.onload=function(){wind_status();}</script>
@stop