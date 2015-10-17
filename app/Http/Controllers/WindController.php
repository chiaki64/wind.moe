<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WindController extends Controller
{
    public function essay(){
        return view('essay');
    }

    public function code(){
        return view('code');
    }

    public function diary(){
        return view('diary');
    }

    public function links(){
        return 'links page';
    }
}
