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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tranding', function () {
    return view('components/content_tranding');
});

Route::get('create_post', function () {
    return view('components/create_post');
});

Route::get('post', function () {
    return view('components/post');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
