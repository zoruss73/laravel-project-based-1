<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });


// Route::view('/about', 'about');

// Route::get('/product/{id}', function(string $id) {
//     return "Product ID: " . $id;
// })->whereNumber('id');

// Route::get('/user/{username}', function(string $username){
//     return "<h1>User: </h1>" . $username;
// })->where('username', '[a-z]+');

// Route::get('{lang}/product/{id}', function(string $lang, string $id){
//     return "Language: " . $lang . "<br>Product ID: " . $id;
// })->where([
//     'lang' => '[a-zA-z]{2,3}',
//     'id'=> '\d{11}'
// ]);

// Route::get('/search/{query}', function(string $query){
//     return $query;
// })->where('query', '.+');

// Route::get('/about', function() {
//     return view('about');
// })->name('about');

// Route::get('/{lang}/product/{id}', function(string $lang, string $id){

// })->name('product.view');


// Route::get('/user/profile', function(){
//     return "SAD";
// })->name('profile');

// Route::get('/current-user', function(){
//     return to_route('profile');
// });

// Route::prefix('/admin')->group(function () {
//     Route::get('', function() {
//         return "Admin Dashboard";
//     })->name('admin.dashboard');

//     Route::get('/stocks', function() {
//         return "Admin Stocks";
//     })->name('admin.dashboard');
// }) ; 

// Route::get('/sum/{x}/{y}', function(int $x, int $y){
//     return "Sum: " . $x + $y;
// })->whereNumber(['x', 'y']);