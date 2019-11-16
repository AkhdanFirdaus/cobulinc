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

Route::view('tranding', 'components/content_tranding');

Route::view('create_post', 'components/create_post');

Route::view('post', 'components/post');

Route::view('profile', 'components/profile');

Route::view('edit_profile', 'components/edit_profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
