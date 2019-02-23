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

Route::get('/','GuestController@index')->name('index');
Route::get('ContactUs','GuestController@contact')->name('contact');
Route::post('ContactUs','GuestController@contactSubmit')->name('contact_submit');

Route::get('GetAllAuthors','GuestController@getAuthors');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
