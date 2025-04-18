<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
Route::get('/index', [PublicController::class, 'index']);
use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'about']);
use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'login']);
use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
use App\Http\Controllers\ListitemController;
Route::get('/listitem', [ListitemController::class, 'listitem']);