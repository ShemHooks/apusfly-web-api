<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website\ServiceController;



Route::view('/', 'website.home')->name('home');


Route::get('/services/{slug}', [ServiceController::class, 'show'])
    ->name('services.show');

Route::view('/about', 'website.about')->name('about');

Route::view('/contact', 'website.contact')->name('contact');

Route::view('/terms', 'website.terms')->name('terms');

Route::view('/privacy', 'website.privacy')->name('privacy');

Route::view('/login', 'auth.login')
    ->name('login');