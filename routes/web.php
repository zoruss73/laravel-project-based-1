<?php

use App\Http\Controllers\ArithmeticController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

Route::view('/about', 'about')->name('about');

// Route::get('/sum/{a}/{b}', [ArithmeticController::class, 'add'])->name('add')->whereNumber(['a', 'b']);
// Route::get('/subtract/{a}/{b}', [ArithmeticController::class, 'subtract'])->name('subtract')->whereNumber(['a', 'b']);