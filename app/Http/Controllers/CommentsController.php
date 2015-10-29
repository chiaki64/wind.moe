<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['pid' => 'required','parent' => 'required', 'author' => 'required|min:1', 'text' =>'required', 'mail' => 'required', 'url' => 'required','ip'=>'required', 'agent' => 'required' ]);
        $tmp_date = Carbon::now('Asia/Shanghai');
        $request['created'] = Carbon::now('Asia/Shanghai');
        $request['published'] = date('M.d Y',strtotime($tmp_date));

        Comment::create($request->all());
        return reditect('articles');//重定位页面修改
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function api_post_comments(Request $request){
        $this->validate($request,['pid' => 'required','parent' => 'required', 'author' => 'required|min:1', 'text' =>'required', 'mail' => 'required', 'url' => 'required','ip'=>'required', 'agent' => 'required' ]);
        $tmp_date = Carbon::now('Asia/Shanghai');
        $request['created'] = Carbon::now('Asia/Shanghai');
        $request['published'] = date('M.d Y',strtotime($tmp_date));

        Comment::create($request->all());
        return reditect('articles');//重定位页面修改


//        public function store(Request $request){
//            $this->validate($request, ['title' => 'required|min:1', 'text' =>'required', 'category' => 'required']);
//            $request['created_at'] = Carbon::now('Asia/Shanghai');
//            $request['updated_at'] = Carbon::now('Asia/Shanghai');
//            $tmp_data = $request['created_at'];
//            $request['published_at'] = date('M.d Y',strtotime($tmp_data));
//            //寻找 <!--more--> 字段
//            $find_text = $request['text'];
//            $replace_text = str_replace('&lt;!--more--&gt;','<!--more-->',$find_text);
//            $request['text']= $replace_text;
//            //完毕
//            Article::create($request->all());
//            return redirect('articles');
//
//
    }


}
