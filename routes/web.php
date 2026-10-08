<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website\ServiceController;



Route::view('/', 'website.home')->name('home');


Route::get('/services/{slug}', [ServiceController::class, 'show'])
    ->name('services.show');