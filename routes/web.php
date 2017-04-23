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
    return view('index_w');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/buy/{type}', 'BuyController@buy');
Route::post('/buy/tz/{type}', 'BuyController@tz');

Route::get('/admin/api/lu/{type}', 'AdminController@lotteryUpdate');

Route::get('/dc/{type}', 'DcController@index');

Route::get('/zq/{type}', 'ZqController@index');

Route::get('/lq/{type}', 'LqController@index');
