<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TrustedLogoController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('frontend-Home');
Route::get('/articles', [FrontendController::class, 'article'])->name('frontend-article');
Route::get('/event', [FrontendController::class, 'event'])->name('frontend-event');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('frontend-gallery');
Route::get('/events/{slug}', [FrontendController::class, 'showEvent'])->name('events.show');
Route::get('/article/{slug}', [FrontendController::class, 'showArticle'])->name('article.show');







// Login & Logout
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware([\App\Http\Middleware\AuthenticateDashboard::class])->group(function () {
    // Dashboard
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    
    // Article Management
    Route::get('/dashboard/articles', [ArticleController::class, 'index'])->name('Dashboard-Article');
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
    
    // Testimonial Management
    Route::get('/dashboard/testimonials', [TestimonialController::class, 'index'])->name('Dashboard-Testimonials');
    Route::get('/dashboard/create-testimonial', [TestimonialController::class, 'create'])->name('Dashboard-Create-Testimonial');
    Route::post('/dashboard/store-testimonial', [TestimonialController::class, 'store'])->name('Dashboard-Store-Testimonial');
    Route::get('/dashboard/testimonial/{id}/edit', [TestimonialController::class, 'edit'])->name('Dashboard-Edit-Testimonial');
    Route::post('/dashboard/update-testimonial/{id}', [TestimonialController::class, 'update'])->name('Dashboard-Update-Testimonial');
    Route::post('/dashboard/delete-testimonial/{id}', [TestimonialController::class, 'delete'])->name('Dashboard-Delete-Testimonial');
    
    // Trusted Logo Management
    Route::get('/dashboard/trusted-logos', [TrustedLogoController::class, 'index'])->name('Dashboard-TrustedLogos');
    Route::get('/dashboard/create-trusted-logo', [TrustedLogoController::class, 'create'])->name('Dashboard-Create-TrustedLogo');
    Route::post('/dashboard/store-trusted-logo', [TrustedLogoController::class, 'store'])->name('Dashboard-Store-TrustedLogo');
    Route::get('/dashboard/trusted-logo/{id}/edit', [TrustedLogoController::class, 'edit'])->name('Dashboard-Edit-TrustedLogo');
    Route::post('/dashboard/update-trusted-logo/{id}', [TrustedLogoController::class, 'update'])->name('Dashboard-Update-TrustedLogo');
    Route::post('/dashboard/delete-trusted-logo/{id}', [TrustedLogoController::class, 'delete'])->name('Dashboard-Delete-TrustedLogo');

});

