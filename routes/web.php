<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

 
Route::get('/', [AuthController::class, 'showRegistrationForm']);
Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('/register-user', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login-user', [AuthController::class, 'login']);
// Route::get('/register', 'AuthController@showRegistrationForm');
// Route::post('/register', 'AuthController@register');
// Route::get('/login', 'AuthController@showLoginForm');
// Route::post('/login', 'AuthController@login');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'AuthController@dashboard');
    Route::get('/logout', 'AuthController@logout');
});
