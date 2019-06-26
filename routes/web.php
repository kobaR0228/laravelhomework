<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the “web” middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'admin'], function() {
    
     Route::get('news/create', 'Admin\NewsController@add');
     Route::get('news/delete', 'Admin\NewsController@delete');
     Route::get('news/update', 'Admin\NewsController@update');
     Route::get('profile/create', 'Admin\ProfileController@add');
     Route::get('profile/edit', 'Admin\ProfileController@edit');
     Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
     Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
     Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
     
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

