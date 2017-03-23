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

// 读书
Route::get('book', 'BookController@index')->name('web.book.index');

// 美食
Route::get('food', 'FoodController@index')->name('web.food.index');

// 旅游
Route::get('tourism', 'TourismController@index')->name('web.tourism.index');

// 用户首页
Route::group(['prefix' => 'user'], function () {
    // 用户中心
    Route::get('/', 'UserController@index')->name('web.user.index');
    // 个人首页
    Route::get('{id}', 'UserController@show')->name('web.user.show');
});

// 设置
Route::group(['prefix' => 'setting'], function () {
    // 我的信息
    Route::get('/', 'SettingController@index')->name('web.setting.index');
    Route::post('/', 'SettingController@infoStore')->name('web.setting.infoStore');
    // 我的头像
    Route::get('avatar', 'SettingController@avatar')->name('web.setting.avatar');
    Route::post('avatar', 'SettingController@avatarStore')->name('web.setting.avatarStore');
    // 我的小道
    Route::get('domain', 'SettingController@domain')->name('web.setting.domain');
    // 账号安全
    Route::get('security', 'SettingController@security')->name('web.setting.security');
    Route::post('security', 'SettingController@securityStore')->name('web.setting.securityStore');
});