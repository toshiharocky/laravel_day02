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

// トップページ表示
Route::get('/', 'PostsController@index');

// 登録処理
Route::post('posts','PostsController@store');

// お気に入り処理
Route::post('post/{post_id}','PostsController@favo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
