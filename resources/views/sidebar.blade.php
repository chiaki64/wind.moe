@extends('main')

@section('sidebar')

    @yield('content')

    <div class="am-u-lg-1 am-hide-md am-hide-md-down">
        <p>
        <p>
        <p></p>
        </p>
        </p>
    </div>

    <div class="am-u-lg-3 am-u-md-3 am-container am-hide-sm-down">
        <div style="margin:10px;"></div>
        <div>
            <input type="text" id="keyword" class="am-imput-group" placeholder="Keyword" style="border:1px solid #eee;">
            <a href="javascript:void(0)" class="am-link-muted" onclick="search_redirect()">>Search</a>
        </div>

        <div style="margin:45px;"></div>
        <div>
            <!--div块-->
            <p>Note</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <p id="sidebar_note">
                写些什么好呢..
                <br>
                <br>
                <br>
            </p>
        </div>

        {{--<div style="height:150px;">--}}
            {{--<!--div块-->--}}
            {{--<p>一言API</p>--}}
            {{--<hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />--}}
            {{--<div class="wind-offcanvas-div"></div>--}}
            {{--<p>--}}
                {{--高度固定以防不测--}}
            {{--</p>--}}
        {{--</div>--}}

        {{--<div>--}}
            {{--<!--div块-->--}}
            {{--<p>Categories</p>--}}
            {{--<hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />--}}
            {{--<div class="wind-offcanvas-div"></div>--}}
            {{--<p>--}}
                {{--<a href="" class="am-link-muted">我是目录一(num)</a>--}}
                {{--<br>--}}
                {{--<a href="" class="am-link-muted">我是目录二(num)</a>--}}
                {{--<br>--}}
                {{--<a href="" class="am-link-muted">我是目录三(num)</a>--}}
                {{--<br>--}}
            {{--</p>--}}
        {{--</div>--}}

        <div>
            <!--div块-->
            <p>Random Article</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <div id="sidebar_random" style="width:180px;">
            </div>
        </div>
        <br>

        {{--<div>--}}
            {{--<!--div块-->--}}
            {{--<p>Tags</p>--}}
            {{--<hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />--}}
            {{--<div class="wind-offcanvas-div"></div>--}}
            {{--<p id=""sidebar_tags>--}}
                {{--标签--}}
                {{--<br>标签--}}
                {{--<br>标签--}}
                {{--<br>标签--}}
                {{--<br>--}}
            {{--</p>--}}
        {{--</div>--}}

        {{--<div style="height:150px;">--}}
            {{--<!--div块-->--}}
            {{--<p>Music Player</p>--}}
            {{--<hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />--}}
            {{--<div class="wind-offcanvas-div"></div>--}}
            {{--<p>--}}
                {{--高度固定以防不测--}}
            {{--</p>--}}
        {{--</div>--}}

        <div style="height:150px;">
            <!--div块-->
            <p>Booklist</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <div id="sidebar_book"  class="am-text-truncate" style="width:100%">
                <span> 《追忆似水年华》<br></span>
                <span> 《JavaScript权威指南》<br></span>
                <span> 《写给大家看的设计书》<br></span>
                <span> 《深入理解计算机系统》</span>
            </div>
        </div>
        <br>
        <div style="height:150px;">
            <!--div块-->
            <p>Function</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <div>
                <a href="https://wind.moe/inventory">Inventory</a>
                 <br>
                 <br>
                 <br>
            </div>
        </div>

        {{--<div style="height:150px;">--}}
            {{--<!--div块-->--}}
            {{--<p>Contact Me</p>--}}
            {{--<hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />--}}
            {{--<div class="wind-offcanvas-div"></div>--}}
            {{--<p>--}}
                {{--<a href="" class="am-link-muted">i@wind.moe</a><br>--}}
                {{--<a href="" class="am-link-muted">QQ</a><br>--}}
                {{--<a href="" class="am-link-muted">Steam</a><br>--}}
            {{--</p>--}}
        {{--</div>--}}

        <div style="height:150px;">
            <!--div块-->
            <p>Wroking</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <p id="sidebar_book">
                Working...
            </p>
        </div>

    </div>

    <!--Offcanvas-->
    <div style="margin-top:50px;"></div>
    <div id="doc-oc-chiaki" class="am-offcanvas">
        <section class="am-offcanvas-bar" id="offcanvas_more">
            <div class="am-offcanvas-content">
                <h1>稗田千秋</h1>
                <h3>东方舰娘/RPG MAKER/古典文学</h3>
                <p>info</p>
                <a href="wind.moe">info1</a>
            </div>
            <div class="am-offcanvas-content">
                <small>Oct.22 2015 </small>
                <span>人生如戏,全靠演技</span>
            </div>
        </section>
    </div>



@stop