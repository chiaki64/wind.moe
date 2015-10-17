<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
class ArticlesController extends Controller
{
    public function index_api(){

        $articles = Article::all();
        return $articles;
    }

    public function index(){
        $articles = Article::all();
        return view('articles.article', compact('articles'));
        //或者也可以使用这种方式
        //return view('articles.index')->with('articles', $articles);
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

}
