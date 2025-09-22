<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Registration
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout (protected by auth middleware)
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Dashboard (protected by auth middleware)
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
