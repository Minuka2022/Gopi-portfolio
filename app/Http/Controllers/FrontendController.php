<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class FrontendController extends Controller
{
    //

    public function index(){
        return view('User.index');
    }

    public function article(){
        return view('User.Articles');
    }

    public function event(){
        return view('User.Events');
    }

    public function gallery(){
        $images = Gallery::latest()->get();
        return view('User.Gallery', compact('images'));
    }


}
