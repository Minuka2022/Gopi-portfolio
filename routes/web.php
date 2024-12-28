<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Gallery;
use Illuminate\Support\Facades\Route;

//Front end Routes
Route::get('/', [FrontendController::class, 'index'])->name('frontend-Home');
Route::get('/articles', [FrontendController::class, 'article'])->name('frontend-article');
Route::get('/evemt', [FrontendController::class, 'event'])->name('frontend-event');
Route::get('/articles', [FrontendController::class, 'gallery'])->name('frontend-gallery');

//Article Managment
Route::get('/dashboard' , [ArticleController::class, 'index'])->name('Dashboard-Article');


//Event Managment
Route::get('/dashboard/event' , [EventController::class, 'index'])->name('Dashboard-Event');


//Gallery managment
Route::get('/dashboard/gallery' , [EventController::class, 'index'])->name('Dashboard-Gallery');

