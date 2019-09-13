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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Auth::routes();

Route::get('my-Captcha','HomeController@myCaptcha')->name('myCaptcha');

Auth::routes();

Route::post('my-Captcha','HomeController@myCaptchaPost')->name('myCaptcha.Post');

Auth::routes();

Route::get('refresh_Captcha','HomeController@refresh_Captcha')->name('refresh_Captcha');
