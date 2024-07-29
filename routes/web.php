<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficerController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return inertia('IndexView');
    })->name('home');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resources([
        'employees' => EmployeeController::class,
        'officers' => OfficerController::class
    ]);
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
