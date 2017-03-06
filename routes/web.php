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
})->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');

// 作品
Route::get('video', 'VideoController@index')->name('web.video.index');
Route::get('video/{id}', 'VideoController@show')->name('web.video.show');

// 静态页面
Route::get('about', 'PageController@about')->name('web.page.about');