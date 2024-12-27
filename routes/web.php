<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('User.index');
});

Route::get('/dashboard' , function () {
    return view('Admin.Dashboard');
})->name('dashboard-home');
