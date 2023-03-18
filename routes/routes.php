<?php

use App\Controllers\AuthController;
use App\Controllers\DashboardController;
use App\Controllers\WelcomeController;
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use Core\Routing\Route;

/**
 * Make something great with this app
 * keep simple yahh
 */

Route::get('/', WelcomeController::class);


Route::middleware(GuestMiddleware::class)->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth']);

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'submit']);
});


Route::middleware(AuthMiddleware::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/logout', [DashboardController::class, 'logout'])->name('logout');
});
