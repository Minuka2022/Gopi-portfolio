<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //


    public function index () {
        return view('Admin.Article-manage');
    }

    public function create () {
        return view('Admin.A_Create');
    }
}
