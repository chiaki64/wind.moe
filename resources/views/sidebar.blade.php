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
            <input type="text" class="am-imput-group" placeholder="Keyword" style="border:1px solid #eee;">
            <a href="" class="am-link-muted">>Search</a>
        </div>

        <div style="margin:45px;"></div>
        <div>
            <!--div块-->
            <p>Note</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <p>
                欢迎访问我的小站~
                <br> 欢迎访问我的小站~
                <br> 欢迎访问我的小站~
                <br>
            </p>
        </div>

        <div style="height:150px;">
            <!--div块-->
            <p>一言API</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <p>
                高度固定以防不测
            </p>
        </div>

        <div>
            <!--div块-->
            <p>Categories</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <p>
                <a href="" class="am-link-muted">我是目录一(num)</a>
                <br>
                <a href="" class="am-link-muted">我是目录二(num)</a>
                <br>
                <a href="" class="am-link-muted">我是目录三(num)</a>
                <br>
            </p>
        </div>

        <div>
            <!--div块-->
            <p>TimeLine/Random Article</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <p>
            <div>
                <a href="" class="am-link-muted">文章名字</a>&nbsp;&nbsp;&nbsp;&nbsp;<small>Oct.15</small>
            </div>


            <div>
                <a href="" class="am-link-muted">文章长名字</a> &nbsp;&nbsp;&nbsp;&nbsp;<small>Oct.15</small>
            </div>

            <div>
                <a href="" class="am-link-muted">文章特长名字</a> &nbsp;&nbsp;&nbsp;&nbsp;<small>Oct.15</small>
            </div>
            </p>
        </div>

        <div>
            <!--div块-->
            <p>Tags</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <p>
                标签
                <br>标签
                <br>标签
                <br>标签
                <br>
            </p>
        </div>

        <div style="height:150px;">
            <!--div块-->
            <p>Music Player</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <p>
                高度固定以防不测
            </p>
        </div>

        <div style="height:150px;">
            <!--div块-->
            <p>Booklist</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <p>
                书名 <br>
                书名 <br>
                书名 <br>
            </p>
        </div>

        <div style="height:150px;">
            <!--div块-->
            <p>Contact Me</p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default wind-divider" />
            <div class="wind-offcanvas-div"></div>
            <p>
                <a href="" class="am-link-muted">i@wind.moe</a><br>
                <a href="" class="am-link-muted">QQ</a><br>
                <a href="" class="am-link-muted">Steam</a><br>
            </p>
        </div>




    </div>
@stop