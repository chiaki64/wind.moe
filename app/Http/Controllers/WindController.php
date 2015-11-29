<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Console\IlluminateCaster;
use Request;
use Input;
use App\Article;
use App\Comment;
use App\Category;
use App\Note;
use App\Http\Requests;
use Carbon\Carbon;
//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

class WindController extends Controller
{
    public function index(){
        $articles = Article::latest('created_at')->published()->get();//->take(10)
        foreach ($articles as $article){
            $str = explode('__more__',$article['text']);
            $article['text']=(string)$str[0];
        }
        return view('article.article', compact('articles'));
    }

    public function category($category){
        $articles = Article::where('category', $category)->published()->get();//->take(5)
        foreach ($articles as $article){
            $str = explode('__more__',$article['text']);
            $article['text']=(string)$str[0];
        }
        return view('article.article', compact('articles'));
    }


    public function create(){
        if(\Auth::guest())
            return redirect('article');
        return view('admin.create');
    }

    public function show($id){
        $article = Article::findOrFail($id);
        str_replace('__more__',"",$article['text']);
        return view('article.show', compact('article'));
//        return $article;
    }

    public function store(){
        if(\Auth::guest())
            return redirect('article');
        else{
            $request = Request::all();
            $request['created_at'] = Carbon::now('Asia/Shanghai');
            $request['updated_at'] = Carbon::now('Asia/Shanghai');
            $request['published_at'] = date('M.d Y',strtotime($request['created_at']));
            Article::create($request);
            \Session::flash('flash_message', 'Successful!');
        }
        return redirect('/article');
    }

    public function edit($id){
        if(\Auth::guest())
            return redirect('article');
        $article = Article::findOrFail($id);
        return view('admin.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){
        if(\Auth::guest())
            return redirect('article');
        $article = Article::findOrFail($id);
        $article['updated_at'] = Carbon::now('Asia/Shanghai');
        $article->update($request->all());
        return redirect('article');
    }

    public function destroy($id){
        return ("sure?");
    }

    public function __construct(){
        $this->middleware('auth', ['only' => 'create']);
    }


    public function comment(){
        $request = Request::all();
        if($request['author']=='' || $request['text']=='')
            return redirect()->back();
        $tmp_date = Carbon::now('Asia/Shanghai');
        $request['created_at'] = Carbon::now('Asia/Shanghai');
        $request['published_at'] = date('M.d Y',strtotime($tmp_date));
        //凑合用一用
        str_replace(';','&#59;',$request['author']);
        str_replace(';','&#59;',$request['text']);
        str_replace(';','&#59;',$request['url']);
        str_replace(';','&#59;',$request['email']);
//        return $request;
        Comment::create($request);
        return redirect()->back();
    }

    public function getComment($id){
        $comments = Comment::latest('created_at')->where('pid', $id)->get();
        //搜索条件
        return $comments;
    }


    public function search(){
        $key = Input::get('key');
        $id = Article::max('id');
        for($cnt=1;$id>0;$id--){
            $article = Article::find($id);
            if(stripos($article['title'],$key) || stripos($article['text'],$key)){
                $articles[$cnt]=$article;
                $cnt++;
            }else if(stristr($article['tags'],$key)){
                $articles[$cnt]=$article;
                $cnt++;
            }
            if($id==1 && $cnt==1)
                $articles[$cnt]=null;
        }

        foreach ($articles as $article){
            $str = explode('__more__',$article['text']);
            $article['text']=(string)$str[0];
        }

//        return view('article.search', compact('articles'));
        if($articles['1']==null)
            return view('errors.search_404');
        else
            return view('article.search', compact('articles'));
//        return $articles;
    }


    public function manageArticle(){
        $articles = Article::latest('created_at')->get();

        return view('admin.articles',compact('articles'));
    }



    //Note
    public function note(){
        $notes = Note::latest('created_at')->get();

        return view('article.note',compact('notes'));
    }

    //Static
    public function links(){
        return view('static.links');
    }

    public function about(){
        return view('static.about');
    }


}
