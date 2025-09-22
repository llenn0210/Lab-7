<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\DashboardController;


Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
 
 
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
 
 
Route::post('/logout', [AuthController::class, 'logout'])->middleware(AuthMiddleware::class);
Route::get('/dashboard', [DashboardController::class, 'index']);
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(AuthMiddleware::class);
