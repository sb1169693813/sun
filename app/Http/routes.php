<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help')->name('help');
//在Laravel中，我们可以通过在路由后面链式调用name方法来为路由指定名称：
Route::get('/about', 'StaticPagesController@about')->name('about');
//用户注册
Route::get('/signup','UserController@create')->name('signup');