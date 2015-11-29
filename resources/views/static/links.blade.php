@extends('layout')

@section('content')


<ul class="links">
    <li style="clear: both;float: none;width:100%;margin:0 0 0 -10px;">
        <div class="title mdl-color-text--grey-500">
            Friend Links
        </div>
        <hr>
    </li>


    <li>
        <a href="#" target="_blank"><img src="./static/img/avatar.jpg">
            <h3 id="id_1">稗田千秋</h3>
            <p>私は 理想が现実を覆せると信じています. </p>
            <div class="mdl-tooltip" for="id_1">
                wind.moe
            </div>
        </a>
    </li>
    {{--<li>--}}
        {{--<a href="#" target="_blank"><img src="./static/img/avatar.jpg">--}}
            {{--<h3 id="id_2">稗田千秋</h3>--}}
            {{--<p>私は 理想が现実を覆せると信じています. </p>--}}
            {{--<div class="mdl-tooltip" for="id_2">--}}
                {{--wind.moe--}}
            {{--</div>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<a href="#" target="_blank"><img src="./static/img/avatar.jpg">--}}
            {{--<h3 id="id_3">稗田千秋</h3>--}}
            {{--<p>私は 理想が现実を覆せると信じています. </p>--}}
            {{--<div class="mdl-tooltip" for="id_3">--}}
                {{--wind.moe--}}
            {{--</div>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<a href="#" target="_blank"><img src="./static/img/avatar.jpg">--}}
            {{--<h3 id="id_4">稗田千秋</h3>--}}
            {{--<p>私は 理想が现実を覆せると信じています. </p>--}}
            {{--<div class="mdl-tooltip" for="id_4">--}}
                {{--wind.moe--}}
            {{--</div>--}}
        {{--</a>--}}
    {{--</li>--}}


    <li style="clear: both;float: none;width:100%;margin:0 0 0 -10px;">
        <div class="title mdl-color-text--grey-500">
            Favorite Website
        </div>
        <hr>
    </li>

    {{--<li>--}}
        {{--<a href="#" target="_blank"><img src="./static/img/avatar.jpg">--}}
            {{--<h3 id="id_5">稗田千秋</h3>--}}
            {{--<p>私は 理想が现実を覆せると信じています. </p>--}}
            {{--<div class="mdl-tooltip" for="id_5">--}}
                {{--wind.moe--}}
            {{--</div>--}}
        {{--</a>--}}
    {{--</li>--}}

    {{--<li>--}}
        {{--<a href="#" target="_blank"><img src="./static/img/avatar.jpg">--}}
            {{--<h3 id="id_5">稗田千秋</h3>--}}
            {{--<p>私は 理想が现実を覆せると信じています. </p>--}}
            {{--<div class="mdl-tooltip" for="id_5">--}}
                {{--wind.moe--}}
            {{--</div>--}}
        {{--</a>--}}
    {{--</li>--}}

    {{--<li style="clear: both;float: none;width:100%;margin:0 0 0 -10px;">--}}
        {{--<div class="title mdl-color-text--grey-500">--}}
            {{--Send Links--}}
        {{--</div>--}}
        {{--<hr>--}}
    {{--</li>--}}

    {{--<li>--}}
        {{--<a href="#" target="_blank"><img src="./static/img/avatar.jpg">--}}
            {{--<h3 id="send_links">投递友链</h3>--}}
            {{--<p>私は 理想が现実を覆せると信じています. </p>--}}
            {{--<div class="mdl-tooltip" for="send_links">i@wind.moe</div>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<a href="#" target="_blank"><img src="./static/img/avatar.jpg">--}}
            {{--<h3 id="send_info">建议反馈</h3>--}}
            {{--<p>私は 理想が现実を覆せると信じています. </p>--}}
            {{--<div class="mdl-tooltip" for="send_info">i@wind.moe</div>--}}
        {{--</a>--}}
    {{--</li>--}}

</ul>



<script>

    document.onreadystatechange = doSomething;
    function doSomething() {
        if(document.readyState == "complete"){
            if(document.getElementById('card-content'))
                document.getElementById('card-content').setAttribute("class", "card-content mdl-cell mdl-cell--8-col mdl-color--white");
            if(document.getElementById("loading"))
                document.getElementById("loading").innerHTML = "";
        }
    }

</script>
@stop