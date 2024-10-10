<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [dashboardController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/login', [AdminController::class, 'login']);
Route::get('/register', [AdminController::class, 'register']);


