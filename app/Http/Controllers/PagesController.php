<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function select(){
        return view('select0226');
    }
 
    public function selectwhere(){
        return view('selectwhere0226');
    }

    public function selectjoin(){
        return view('selectjoin0226');
    }

    public function joinwhere(){
        return view('joinwhere0226');
    }
}
