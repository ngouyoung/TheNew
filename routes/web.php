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


/*facebook socialite*/
Route::get('login/facebook',['as' => 'login/facebook','uses' => 'Auth\LoginController@redirectToProvider']);
Route::get('login/facebook/callback',['as' =>'login/facebook/callback','uses' =>  'Auth\LoginController@handleProviderCallback']);


/*login with google*/
Route::get('login/google',['as' => 'login/google','uses' => 'Auth\LoginController@redirectToProviderGoogle']);
Route::get('login/google/callback',['as' =>'login/google/callback','uses' =>  'Auth\LoginController@handleProviderCallbackGoogle']);


/* feedback */
Route::get('/feedback','FeedbackController@openFeedback');// open page url we use GET
Route::post('/feedback','FeedbackController@sendFeedback');//put data into database we use POST


Route::get('/test','FeedbackController@fillIn');


