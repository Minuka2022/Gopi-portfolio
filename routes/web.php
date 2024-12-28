<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('User.Index');
});

Route::get('/dashboard' , function () {
    return view('Admin.Dashboard');
})->name('dashboard-home');

// Route::get('/create_event' , function () {
//     return view('Admin.E_Create');
// });

// Route::get('/create_article' , function () {
//     return view('Admin.A_Create');
// });

// Route::get('/manage_gallery' , function () {
//     return view('Admin.Manage_gallery');
// });
