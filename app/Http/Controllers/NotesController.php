<?php

namespace App\Http\Controllers;

use App\Article;
use App\Note;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    //Back-end rendering
    public function api_notes_max(){
        $id = Note::max('id');
        return $id;
    }

    public function api_show_notes(){
        $id = Note::max('id');
        $articles = Note::latest('created_at')->whereBetween('id', array($id-19, $id))->get();
        return view('sidebar',$articles);
    }

    public function api_get_notes()
    {
        $id = Note::max('id');
        for ($cnt = 1; $cnt <= 20; $cnt++,$id--) {
        $articles[$cnt]=Note::find($id);
        }
        return $articles;
    }
}
