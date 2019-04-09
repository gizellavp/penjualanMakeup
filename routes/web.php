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
    return view('list');
});

Route::get('helo',function () {
    return view('template');
});
Route::get('halo', function() {
	return view('Master/master');
});

Route::get('table', 'BarangController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
