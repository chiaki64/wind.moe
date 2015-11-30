<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticController extends Controller
{
    //Static
    public function links(){
        return view('static.links');
    }

    public function about(){
        return view('static.about');
    }
}
