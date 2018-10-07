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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/videos', 'VideoController@index')->name('videos');

    Route::get('/uploader', 'VideoController@uploader')->name('uploader');

    Route::post('/upload', 'VideoController@store')->name('upload');
});

Route::get('/movies', 'HomeController@movies')->name('movies');

Route::get('/upcoming', 'HomeController@upcoming')->name('upcoming');

Route::get('/people', 'HomeController@people')->name('people');
