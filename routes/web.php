<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('dashboard');
})->name('dashboard');

 



Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth.basic');

Route::get('api/user', function () {
    // Only authenticated users may enter...
})->middleware('auth.basic.once');

Route::get('post/create', 'PostController@create')->name('post');

Route::post('post', 'PostController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
