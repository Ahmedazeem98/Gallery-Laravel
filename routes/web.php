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

Route::get('/','AlbumsController@index');
Route::get('/albums','AlbumsController@index');
Route::get('/albums/create','AlbumsController@create');
Route::post('/albums/store','AlbumsController@store');
Route::get('/albums/{id}','AlbumsController@show');
Route::get('/albums/{id}/edit','AlbumsController@edit');
Route::post('/albums/{id}','AlbumsController@update');
Route::get('/albums/{id}/delete','AlbumsController@destroy');
Route::get('/albums/{id}/edit','AlbumsController@edit');

Route::get('/photos/create/{id}','PhotosController@create');
Route::post('/photos/store/{id}','PhotosController@store');
Route::get('/photos/{id}','PhotosController@show');
Route::get('/photos/{id}/delete','PhotosController@destroy');