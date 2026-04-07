<?php

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
});
