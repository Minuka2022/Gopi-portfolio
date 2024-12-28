<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Gallery extends Controller
{
    //
    public function index () {
        return view('Admin.Gallery-manage');
    }
}
