<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WindController extends Controller
{
    public function essay(){
        return view('articles.essay');
    }

    public function code(){
        return view('articles.code');
    }

    public function diary(){
        return view('articles.diary');
    }

    public function links(){
        return 'links page';
    }
}
