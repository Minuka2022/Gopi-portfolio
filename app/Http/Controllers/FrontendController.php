<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('User.Gallery');
    }
}
