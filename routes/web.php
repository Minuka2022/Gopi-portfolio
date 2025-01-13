<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('frontend-Home');
Route::get('/articles', [FrontendController::class, 'article'])->name('frontend-article');
Route::get('/event', [FrontendController::class, 'event'])->name('frontend-event');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('frontend-gallery');
Route::get('/events/{slug}', [FrontendController::class, 'showEvent'])->name('events.show');

//Article Managment
Route::get('/dashboard' , [ArticleController::class, 'index'])->name('Dashboard-Article');
Route::get('/dashboard/Create-Article', [ArticleController::class, 'create'])->name('Dashboard-Create-Article');
Route::post('/dashboard/store-article', [ArticleController::class, 'store'])->name('Dashboard-Store-Article');
Route::post('/dashboard/upload-image', [ArticleController::class, 'uploadImage'])->name('Dashboard-Upload-Image');
Route::get('/dashboard/{id}/edit' , [ArticleController::class, 'edit'])->name('Dashboard-article-edit');
Route::delete('/dashboard/article-image/{id}', [ArticleController::class, 'deleteImage'])->name('Dashboard-Article-Image-delete');
Route::post('/dashboard/update-article/{id}', [ArticleController::class, 'update'])->name('Dashboard-update-Article');
Route::post('/dashboard/delete-article/{id}', [ArticleController::class, 'delete'])->name('Dashboard-delete-Article');

Route::get('/gallery', [FrontendController::class, 'gallery'])->name('frontend-gallery');
// Route::get('/gallery', [FrontendController::class, 'gallery'])->name('frontend-gallery');


// //Article Managment
// Route::get('/dashboard' , [ArticleController::class, 'index'])->name('Dashboard-Article');
// Route::get('/dashboard/Create-Article', [ArticleController::class, 'create'])->name('Dashboard-Create-Article');
// Route::post('/dashboard/store-article', [ArticleController::class, 'store'])->name('Dashboard-Store-Article');
// Route::post('/dashboard/upload-image', [ArticleController::class, 'uploadImage'])->name('Dashboard-Upload-Image');
// Route::get('/dashboard/{id}/edit' , [ArticleController::class, 'edit'])->name('Dashboard-article-edit');
// Route::delete('/dashboard/article-image/{id}', [ArticleController::class, 'deleteImage'])->name('Dashboard-Article-Image-delete');
// Route::post('/dashboard/update-article/{id}', [ArticleController::class, 'update'])->name('Dashboard-update-Article');
// Route::post('/dashboard/delete-article/{id}', [ArticleController::class, 'delete'])->name('Dashboard-delete-Article');



// Login & Logout
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware([\App\Http\Middleware\AuthenticateDashboard::class])->group(function () {
    // Article Management
    Route::get('/dashboard' , [ArticleController::class, 'index'])->name('Dashboard-Article');
    Route::get('/dashboard/Create-Article', [ArticleController::class, 'create'])->name('Dashboard-Create-Article');
    Route::post('/dashboard/store-article', [ArticleController::class, 'store'])->name('Dashboard-Store-Article');
    Route::post('/dashboard/upload-image', [ArticleController::class, 'uploadImage'])->name('Dashboard-Upload-Image');
    Route::get('/dashboard/{id}/edit' , [ArticleController::class, 'edit'])->name('Dashboard-article-edit');
    Route::delete('/dashboard/article-image/{id}', [ArticleController::class, 'deleteImage'])->name('Dashboard-Article-Image-delete');
    Route::post('/dashboard/update-article/{id}', [ArticleController::class, 'update'])->name('Dashboard-update-Article');
    Route::post('/dashboard/delete-article/{id}', [ArticleController::class, 'delete'])->name('Dashboard-delete-Article');

    //Event Managment
    Route::get('/dashboard/event', [EventController::class, 'index'])->name('Dashboard-Event');
    Route::get('/dashboard/create-Event', [EventController::class, 'create'])->name('Dashboard-Create-Event');
    Route::post('/dashboard/store-event', [EventController::class, 'store'])->name('Dashboard-Store-Event');
    Route::post('/upload-image', [EventController::class, 'uploadImage'])->name('Dashboard-Upload-EImage');
    Route::get('dashboard/event/{id}/edit', [EventController::class , 'edit'])->name('Dashbaord-Edit-Event');
    Route::delete('/dashboard/event-image/{id}', [EventController::class, 'deleteImage'])->name('Dashboard-delete-EventImage');
    Route::post('/dashboard/update-event/{id}', [EventController::class, 'update'])->name('Dashboard-update-Event');
    Route::post('/dashboard/delete-event/{id}', [EventController::class, 'delete'])->name('Dashboard-delete-Event');

    // Gallery Management
    Route::get('/dashboard/gallery', [GalleryController::class, 'index'])->name('Dashboard-Gallery');
    Route::post('/dashboard/store-gallery', [GalleryController::class, 'store'])->name('Dashboard-Store-Gallery');
    Route::delete('/dashboard/delete-gallery/{gallery}', [GalleryController::class, 'destroy'])->name('Dashboard-Delete-Gallery');

    //Article Managment
    Route::get('/dashboard' , [ArticleController::class, 'index'])->name('Dashboard-Article');
    Route::get('/dashboard/Create-Article', [ArticleController::class, 'create'])->name('Dashboard-Create-Article');
    Route::post('/dashboard/store-article', [ArticleController::class, 'store'])->name('Dashboard-Store-Article');
    Route::post('/dashboard/upload-image', [ArticleController::class, 'uploadImage'])->name('Dashboard-Upload-Image');
    Route::get('/dashboard/{id}/edit' , [ArticleController::class, 'edit'])->name('Dashboard-article-edit');
    Route::delete('/dashboard/article-image/{id}', [ArticleController::class, 'deleteImage'])->name('Dashboard-Article-Image-delete');
    Route::post('/dashboard/update-article/{id}', [ArticleController::class, 'update'])->name('Dashboard-update-Article');
    Route::post('/dashboard/delete-article/{id}', [ArticleController::class, 'delete'])->name('Dashboard-delete-Article');
});

