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

Route::get('/', 'ArticlesController@index');
Route::get('articles', 'ArticlesController@index');
Route::get('articles-dev', 'ArticlesController@indexDev');
Route::get('subscribe', function () {
    return view('subscribe_page');
});
Route::get('hubspot-test', function () {
    return view('hubspot');
});
Route::get('{slug}', 'ArticlesController@show');
