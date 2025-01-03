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
Route::get('/dashboard/Create-Article', [ArticleController::class, 'create'])->name('Dashboard-Create-Article');
Route::post('/dashboard/store-article', [ArticleController::class, 'store'])->name('Dashboard-Store-Article');
Route::post('/dashboard/upload-image', [ArticleController::class, 'uploadImage'])->name('Dashboard-Upload-Image');

Route::post('/dashboard/eventStore' , [EventController::class, 'store'])->name('event.store');
Route::post('/dashboard/upload-images'  , [EventController::class, 'uploadImages'])->name('events.uploadImages');
//Event Managment
Route::get('/dashboard/event' , [EventController::class, 'index'])->name('Dashboard-Event');
Route::get('/dashboard/Create-Event' , [EventController::class, 'create'])->name('Dashboard-Create-Event');

//Gallery managment
Route::get('/dashboard/gallery' , [Gallery::class, 'index'])->name('Dashboard-Gallery');

