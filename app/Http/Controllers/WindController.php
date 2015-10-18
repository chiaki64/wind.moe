<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WindController extends Controller
{
    public function index_api(){
        $articles = Article::all();
        return $articles;
    }

    public function index(){
        //$articles = Article::all();
//        return \Auth::user();
        $articles = Article::latest('published_at')->get();
        return view('articles.article', compact('articles'));
        //other way
        //return view('articles.index')->with('articles', $articles);
    }

    public function essay(){
        $articles = Article::latest('published_at')->get();
        return view('articles.essay', compact('articles'));
    }

    public function code(){
        $articles = Article::latest('published_at')->get();
        return view('articles.code', compact('articles'));
    }

    public function daily(){
        //$articles = Article::all();
        $articles = Article::latest('published_at')->get();
        return view('articles.daily', compact('articles'));
    }

    public function show($id){
        $article = Article::find($id);

        // not found
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
        $request['published_at'] = Carbon::now('Asia/Shanghai');
        Article::create($request->all());
        return redirect('articles');
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
        $request['published_at'] = Carbon::now('Asia/Shanghai');
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
