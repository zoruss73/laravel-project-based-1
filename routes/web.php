<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/signup', [SignUpController::class, 'create'])->name('signup');
Route::get('/login', [LoginController::class, 'create'])->name('login');
