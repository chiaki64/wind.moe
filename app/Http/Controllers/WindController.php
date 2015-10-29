<?php

namespace App\Http\Controllers;

use App\Article;
use App\Note;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\Console\Tests\Input\ArgvInputTest;

class WindController extends Controller
{
    //获取所有文章
    public function api_index(){
        $articles = Article::all();
        return $articles;
    }
    //to_index
    public function api_to_index(){
        return redirect('');
    }

    //获取最大文章数   del:max 融合到其他api里面
    public function api_max_article_id(){
        $id = Article::max('id');
        return $id;
    }

    //获取对应标签最大文章数
    public function api_max_category_id($category){
        $id = Article::max('id');
        for(;$id>0;$id--){
            $article = Article::find($id);
            if($article['category']==$category)
                return $id;
        }
    }


    //获取单个文章
    public function api_get_article($id){
        $articles = Article::find($id);
        if(is_null($articles)){
            abort(404);
        }
        return $articles;
    }

    //获取更多文章 Num:8 / tag:Article
    public function api_get_more_article($id){
        for($count=1,$sum=0;$count <= 6 && $id>0 ;$count++,$id--){
            $article[$count] = Article::find($id);

            if(Article::find($id)!=null) //当不为空值时 $sum + 1  | $sum 的作用是判断剩下的文章是否加载完成
                $sum++;
        }
//        $article[0]=$sum;
        return $article;
    }

    //获取更多对应标签文章  Num:8 / tag:$category
    public function api_get_more_category_article($category,$id){
        for($count=1;$count <= 6 && $id>0;$id--){
            $articles = Article::find($id);
            if($articles['category']==$category){
                $article[$count]=$articles;
                $count++;
            }
        }
        if($count<6)
            $article[$count]=null;
        return $article;

    }

    function api_search($keyword){
        $id = Article::max('id');
        for($cnt=1;$id>0;$id--){
            $article = Article::find($id);
            if(stripos($article['title'],$keyword) || stripos($article['text'],$keyword)){
                $articles[$cnt]=$article;
                $cnt++;
            }else if(stristr($article['tags'],$keyword)){
                $articles[$cnt]=$article;
                $cnt++;
            }
            if($id==1 && $cnt==1)
                $articles[$cnt]=null;
        }
        return $articles;


    }

    function api_random_article(){
        $id = Article::max('id');
        $numbers = range(1,$id);
        shuffle($numbers);
        $num=6;
        $result = array_slice($numbers,0,$num);
        $cnt=1;
        foreach($result as $random){
            $articles[$cnt]=Article::find($random);
            $cnt++;
        }
        return $articles;

    }

    //评论

    function api_get_comments($id){
        $comments = Comment::all();
        //搜索条件
        return $comments;
    }

    function api_get_json_comments(){

        $comments = Comment::all();
        return $comments;
    }

    //获取post的requset 有错
    function api_post_comments(Request $request){
        $this->validate($request,['author' => 'required|min:1', 'text' =>'required', 'mail' => 'required', 'url' => 'required']);
        $tmp_date = Carbon::now('Asia/Shanghai');
        $request['published'] = date('M.d Y',strtotime($tmp_date));
        Comment::create($request->all());
        return view('articles.article');
    }

    //评论=======================================


    /**
     * @return \Illuminate\View\View
     */
    public function index(){
//清空注释
        //$articles = Article::all();
//        return \Auth::user();

//        $id = Article::max('id');
//        $articles = Article::latest('created_at')->whereBetween('id', array($id-7, $id))->get();

        return view('articles.article');
        //other way
        //return view('articles.index')->with('articles', $articles);
//        return view('articles.article');
    }

    public function essay(){
//        $articles = Article::latest('created_at')->get();
//        return view('articles.essay', compact('articles'));
        return view('articles.essay');
    }

    public function code(){
        return view('articles.code');
    }

    public function daily(){
        return view('articles.daily');
    }

    public function links(){
        return view('admin.links');
    }

    public function search(){
//        $articles = Article::latest('created_at')->get();
//        return view('articles.search', compact('articles'));
        return view('articles.search');
    }

    public function show($id){
        $article = Article::find($id);

        //if not found
        if(is_null($article)){
            abort(404);
        }
        //$article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }


    public function create(){
        if(\Auth::guest()){
            return redirect('articles');
        }
        return view('admin.create');
    }

//    public function store(CreateArticleRequest $request){
//        $request['published_at'] = Carbon::now();
//        $request['created_at'] = Carbon::now();
//        $request['updated_at'] = Carbon::now();
//        Article::create($request->all());
//        return redirect('articles');
//    }

    public function store(Request $request){
        $this->validate($request, ['title' => 'required|min:1', 'text' =>'required', 'category' => 'required']);
        $request['created_at'] = Carbon::now('Asia/Shanghai');
        $request['updated_at'] = Carbon::now('Asia/Shanghai');
        $tmp_data = $request['created_at'];
        $request['published_at'] = date('M.d Y',strtotime($tmp_data));
        //寻找 <!--more--> 字段
        $find_text = $request['text'];
        $replace_text = str_replace('&lt;!--more--&gt;','<!--more-->',$find_text);
        $request['text']= $replace_text;
        //完毕
        Article::create($request->all());
        return redirect('articles');
//        \Auth::user()->articles()->create($request->all());
//        \Session::flash('flash_message', '文章发布成功');
//        return redirect('articles');
    }

    public function edit($id){
        if(\Auth::guest()){
            return redirect('articles');
        }
        $article = Article::findOrFail($id);
        return view('admin.edit', compact('article'));
    }

    //update
    public function update($id, Request $request){
        $article = Article::findOrFail($id);
        $request['updated_at'] = Carbon::now('Asia/Shanghai');
//        $tmp_data = $request['created_at'];
//        $request['published_at'] = date('M.d Y',strtotime($tmp_data));
        //寻找 <!--more--> 字段
        $find_text = $request['text'];
        $replace_text = str_replace('&lt;!--more--&gt;','<!--more-->',$find_text);
        $request['text']= $replace_text;
        //完毕
        $article->update($request->all());
        return redirect('articles');
    }

    public function home(){
        return redirect('/articles/create');
    }

    public function __construct(){
        //只有发布页
        $this->middleware('auth', ['only' => 'create']);
    }

}
