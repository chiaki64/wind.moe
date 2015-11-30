<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WindCore</title>
    <!--Meta-->
    <meta name="author" content="稗田千秋">
    <meta name="keywords" content="稗田千秋,Hieda no Chiaki,forblackking,个人博客,blog,algorthim,acgn,code,daily,essay">
    <meta name="description" content="">
    <meta name="copyright" content="Hieda no Chiaki">
    <meta name="generator" content="Brackets">
    <!--Favicon icon-->
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <meta name="mobile-web-app-capable" content="yes">
    {{--<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">--}}
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    {{--<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">--}}
    <meta name="msapplication-TileColor" content="#3372DF">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://dn-wind-moe.qbox.me/css/material.min.css">
    <link rel="stylesheet" href="https://dn-wind-moe.qbox.me/css/wind.lime.min.css">

    {{--<link rel="stylesheet" href="/static/css/material.css">--}}
    <!--  <link rel="stylesheet" href="./static/material-design-lite-master/templates/android-dot-com/styles.css">-->
    {{--<link rel="stylesheet" href="/static/css/wind.lime.css">--}}
</head>
<body>
<div class="layout mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="header mdl-layout__header mdl-layout__header--waterfall">
        <div class="header-row">
        <span class="wind-title mdl-layout-title"></span>
            <div class="spacer"></div>
            <div class="search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search-field">
                </div>
            </div>
            <!-- Navigation -->
            <div class="wind-navigation-container">
                <nav class="wind-navigation mdl-navigation">
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/">Home</a>
                    @if(!\Auth::guest())
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/manage/articles">Manage</a>
                    @endif
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/articles/essay">Essay</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/articles/daily">Daily</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/articles/code">Code</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/articles/algorithm">Algorithm</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/articles/acgn">ACGN</a>
                </nav>
            </div>

        <span class="wind-mobile-title mdl-layout-title">
          </span>
            <button class="wind-more-button mdl-button mdl-js-button mdl-button--icon" id="more-button">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
                <a href="/article"><li class="mdl-menu__item"> &nbsp; HomePage &nbsp;</li></a>
                <a href="/note"><li class="mdl-menu__item"> &nbsp; Notes &nbsp;</li></a>
                <a href="https://wind.moe/inventory"><li class="mdl-menu__item"> &nbsp; Inventory &nbsp;</li></a>
                <a href="/links"><li class="mdl-menu__item"> &nbsp; Links &nbsp;</li></a>
                <a href="/about"><li class="mdl-menu__item"> &nbsp; About &nbsp;</li></a>
                @if(\Auth::guest())
                    <a href="/auth/login"><li class="mdl-menu__item"> &nbsp; Login &nbsp;</li></a>
                @else
                    <a href="/auth/logout"><li class="mdl-menu__item"> &nbsp; Logout &nbsp;</li></a>
                @endif
            </ul>
        </div>
    </header>

    <div class="wind-drawer mdl-layout__drawer">
      <span class="mdl-layout-title">
          <img class="drawer-avatar" src="/static/img/avatar.jpg">
          <h5  style="width:100%;margin-top:8px;text-align: center;">稗田千秋</h5>
          <p style="width:100%;text-align: center;">东方舰娘/伪前端/算法鶸<br>RPG MAKER/古典文学/代码洁癖</p>
        </span>

        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="/articles/essay">Essay</a>
            <a class="mdl-navigation__link" href="/articles/daily">Daily</a>
            <a class="mdl-navigation__link" href="/articles/code">Code</a>
            <a class="mdl-navigation__link" href="/articles/algorithm">Algorithm</a>
            <a class="mdl-navigation__link" href="/articles/acgn">ACGN</a>
            <div class="drawer-separator"></div>
            @if(!\Auth::guest())
            <a class="mdl-navigation__link" href="/manage/articles">Manage</a>
            @endif
            <a class="mdl-navigation__link" href="/note">Notes</a>
            <a class="mdl-navigation__link" href="https://wind.moe/inventory">Inventory</a>
            <a class="mdl-navigation__link" href="/links">Links</a>
            <a class="mdl-navigation__link" href="/about">About</a>

        </nav>
    </div>

    <!--Content -->
    <!--Articles-->
    <div class="container mdl-grid mdl-layout__content">
        <div id="card-content" class="card-content mdl-cell mdl-cell--8-col">
            <!-- Card-->

            @yield('content')

            <div id="loading" style="width: 5%;margin:100px auto 0 auto;">
                <div class="mdl-spinner mdl-js-spinner is-active"></div>
            </div>

        </div>
        <footer class="mdl-mini-footer">
            <div class="footer-default mdl-mini-footer">
                <p>CopyRight 2015 Chiaki.</p>
                <p>Developed with Brackets.</p>
                <p> Proudly powered by <a href="https://wind.moe/" title="稗田千秋" target="_blank" class="">Hieda no Chiaki</a>.</p>
            </div>
        </footer>
    </div>
</div>

<script type="text/javascript" src="https://dn-wind-moe.qbox.me/js/jquery-2.1.4.min.js"></script>
<script src="https://dn-wind-moe.qbox.me/static/js/material.min.js"></script>
<script src="https://dn-wind-moe.qbox.me/static/js/wind.moe.min.js"></script>
<script>document.onkeydown=function(e){if(e||(e=window.event),13==(e.keyCode||e.which)){if(0==document.getElementById("search-field").value.length)return!1;window.location.href="/search?key="+document.getElementById("search-field").value}};</script>
<script>function wind_status(){$.getJSON("/api/v2/status?type=steam",function(e){if(console.log(e),document.getElementById("status")){var t=document.getElementById("status");if(2==e.status)var n=e.game+"&nbsp;&nbsp;"+e.type;else var n=e.type;t.innerHTML=n}})}</script>



</body>

</html>