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

    //Search
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
	
	
	//RSS Feed
	public function feed(){
        $items = "";
        $articles = Article::latest('created_at')->published()->get();//->take(10)
        foreach($articles as $article){
//            $str = explode('__more__',$article['text']);
//            $article['text']=(string)$str[0];
            //To rss item data
            $title = "<title><![CDATA[".$article['title']."]]></title>";
            $description = "<description><![CDATA[".$article['text']."]]></description>";
            $author = "<author><![CDATA[".$article['author']."]]></author>";
            $pubDate = "<pubDate>".date('D M d Y H:i:s',strtotime($article['created_at']))." GMT+0800"."</pubDate>";
            $link = "<link>https://wind.moe/article/".$article['id']."</link>";
            $guid = "<link>https://wind.moe/article/".$article['id']."</link>";
            $category = "<category domain='https://wind.moe/articles/{$article['category']}'><![CDATA[".$article['category']."]]></category>";
            $items.= "<item>"."{$title}"."{$description}"."{$author}"."{$pubDate}"."{$link}"."{$guid}"."{$category}"."</item>";
        }

        $web_title = "<title>"."<![CDATA[ WindCore ]]>"."</title>";
        $web_link = "<link>"."https://wind.moe"."</link>";
        $web_description = "<description>"."<![CDATA[WindCore 是稗田千秋的一个个人博客,记录个人的点点滴滴,包含随笔,代码,日常,ACGN等内容. ]]>"."</description>";

        $channel = "{$web_title}"."{$web_link}"."{$web_description}"."{$items}";

        $rss = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>".
            "<rss version=\"2.0\" xmlns:content=\"http://purl.org/rss/1.0/modules/content/\" xmlns:wfw=\"http://wellformedweb.org/CommentAPI/\" xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\">".
            "<channel>".
                "{$channel}".
            "</channel>".
            "</rss>";

		return \Response::make($rss, 200, ['Content-Type' => 'text/xml']);
//		return response($articles,200);//->header('Content-Type','text/xml')
//		return $articles;
		
		
	}


}
