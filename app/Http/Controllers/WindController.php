<?php

namespace App\Http\Controllers;


use Request;
use App\Article;
use App\Http\Requests;
use Carbon\Carbon;
//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;
class WindController extends Controller
{
    //
    public function index(){

        $articles = Article::latest('created_at')->published()->take(5)->get();
        foreach ($articles as $article){
            $str = explode('__more__',$article['text']);
            $article['text']=(string)$str[0];
        }
        return view('article.article', compact('articles'));
//        return $article;
    }


    public function show($id){
        $article = Article::findOrFail($id);
        str_replace('__more__',"",$article['text']);
        return view('article.show', compact('article'));
//        return $article;
    }


    public function store(CreateArticleRequest $request){
//        $request = Request::all();
        $request['created_at'] = Carbon::now('Asia/Shanghai');
        $request['updated_at'] = Carbon::now('Asia/Shanghai');
        $request['published_at'] = date('M.d Y',strtotime($request['created_at']));
        Article::create($request);
        return $request;
//        return redirect('article');
    }



}
