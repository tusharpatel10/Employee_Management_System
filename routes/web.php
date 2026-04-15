<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// MainControler
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});


// faqController
Route::controller(FaqController::class)->prefix('faq')->name('faq/')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/faqStore', 'faqStore')->name('faqStore');
    Route::put('/faqUpdate/{id}', 'faqUpdate')->name('faqUpdate');
    Route::get('/faq/{id}/delete', 'faqDelete')->name('delete');
});


// Admin Route
Route::controller(AdminController::class)->prefix('admin')->name('admin/')->group(function () {
    Route::get('/login', 'login')->name('login');
});
