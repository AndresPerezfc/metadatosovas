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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::redirect('/', 'inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio', 'Web\PageController@inicio')->name('inicio');

//ver mas ova
Route::get('ova/{slug}', 'Web\PageController@ova')->name('ova');