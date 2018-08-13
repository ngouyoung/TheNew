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
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('dashboard', 'AdminController@index');
    Route::get('category', 'CategoryController@index');
    Route::resource('category', 'CategoryController');
});

Route::get('/home', 'HomeController@index')->name('home');


