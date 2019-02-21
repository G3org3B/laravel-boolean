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

Route::get('/', 'HomeController@index');

// pagine statiche
Route::get('/privacy-policy','StaticPageController@privacyPolicy');
Route::get('/lavora-con-noi','StaticPageController@WorkWithUs');
