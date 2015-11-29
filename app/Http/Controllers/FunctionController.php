<?php

namespace App\Http\Controllers;

use Request;
use Input;
use App\Article;
use App\Comment;
use App\Category;
use App\Note;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FunctionController extends Controller
{
    //API->get Article
    public function getArticle(){
        $max = Article::max('id');
        $id = Input::get('id',$max);
        $limit = Input::get('limit',5);
        $category = Input::get('category','default');
        if($category == 'default') {
            for ($cnt=1;$cnt<=$limit &&  $id>0 ;$cnt++,$id--) {
                $articles[$cnt]=Article::find($id);
            }
        }
        else{
            for($cnt=1;$cnt<=$limit && $id>0;){
                $article=Article::find($id);
                if($article['category'] != $category){
                    $id--;
                    continue;
                }
                else{
                    $articles[$cnt]=$article;
                    $cnt++;
                }
            }

        }
        return $articles;
    }


}
