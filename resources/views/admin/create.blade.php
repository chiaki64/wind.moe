@extends('main')

@section('sidebar')

    <div class="am-container am-u-lg-8 am-u-md-9">
    <hr/>

    <form id="post-form" class="am-form" name="form" method="post" action="../articles" accept-charset="UTF-8">

        <fieldset>
            <legend>表单标题</legend>
            {{--<input name="_token" type="hidden" value="OclWxL1wSZpndaN9ehiLx0L7rzE1RnANHzCEBQ08">--}}
            {!! Form::open() !!}
            {!! Form::close() !!}
            <div class="am-form-group">
                <label for="create-title">标题</label>
                <input id="create-title" name="title" type="text" class="am-form-field am-radius" placeholder="Title" autofocus/>
            </div>

            <div class="am-form-group">
                <label for="editor">正文</label>
                <textarea id="editor" name="text" placeholder="这里输入内容" autofocus></textarea>
            </div>

            <div class="am-form-group">
                <label for="create-tags">Tags</label>
                <input id="create-tags" name="tags" type="text" class="am-form-field am-radius" placeholder="Title" autofocus/>
            </div>

            <div class="am-form-group" style="width:40%">
                <label for="create-author">作者</label>
                <input id="create-author" name="author" type="text" class="am-form-field am-radius" placeholder="Title" value="稗田千秋" autofocus/>
            </div>

            <div class="am-form-group" style="width:40%">
                <label for="category-select">Category</label>
                <select id="category-select" name="category">
                    <option value="Essay">Essay</option>
                    <option value="Code">Code</option>
                    <option value="Daily">Daily</option>
                </select>
                <span class="am-form-caret"></span>
            </div>


            <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
        </fieldset>
    </form>
</div>
    <div class="am-u-lg-3 am-u-md-3 am-container am-hide-sm-down">
        <div style="margin:10px;"></div>


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



    </div>




@stop