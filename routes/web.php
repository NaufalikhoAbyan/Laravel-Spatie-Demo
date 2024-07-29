<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('IndexView');
})->name('home');

Route::get('/about', function () {
    return inertia('AboutView');
})->name('about');
