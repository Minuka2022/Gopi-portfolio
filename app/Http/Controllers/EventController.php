<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index () {
        return view('Admin.Event-manage');
    }


    public function create(){
        return view('Admin.E_Create');
    }
}
