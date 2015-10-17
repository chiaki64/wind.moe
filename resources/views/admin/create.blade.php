@extends('main')

@section('sidebar')


    <hr/>

    <form id="post-form" class="am-form" name="form" method="post" action="../articles">

        <fieldset>
            <legend>表单标题</legend>
            <input name="_token" type="hidden" value="hD5M6jkA4DGkqoypbo1ZUhEK7qbcg0Myhk8C6pqA">
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
                <label for="doc-select-1">Category</label>
                <select id="doc-select-1" name="category">
                    <option value="essay">Essay</option>
                    <option value="code">Code</option>
                    <option value="diary">Diary</option>
                </select>
                <span class="am-form-caret"></span>
            </div>

            <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
        </fieldset>
    </form>




@stop