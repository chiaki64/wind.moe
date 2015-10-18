<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Request;
class ArticlesController extends Controller
{
    public function index_api(){

        $articles = Article::all();
        return $articles;
    }

    public function index(){
        //$articles = Article::all();
        $articles = Article::latest('published_at')->get();
        return view('articles.article', compact('articles'));
        //或者也可以使用这种方式
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

        // 找不到文章，抛出404
        if(is_null($article)){
            abort(404);
        }
        //$article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('admin.create');
    }

    public function store(){
        $input = Request::all();
        $input['published_at'] = Carbon::now();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        Article::create($input);
        return redirect('articles');
    }

}
