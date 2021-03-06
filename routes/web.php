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
//新しい掲示板用のRoute定義
Route::get('/bbs','BbsController@index');
Route::post('/bbs','BbsController@postArticle');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
