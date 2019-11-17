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

Route::view('/', 'landing')->name('index');

Route::view('tranding', 'components/content_tranding');

Route::view('create_post', 'components/create_post');

// Route::resource('post', 'PostController')->only(['store', 'show']);

Route::view('login', 'auth/login')->name('login');
Route::view('register', 'auth/register')->name('register');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
