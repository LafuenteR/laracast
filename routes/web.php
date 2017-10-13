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

Route::get('/task', 'TasksController@index');
Route::get('/task/{id}', 'TasksController@show');
Route::get('/','PostController@displayPost');
Route::get('/create','PostController@create');
Route::post('/post','PostController@post');
Route::get('/post/{id}','PostController@singlePost');
Route::post('/comment','PostController@addcomment');
Route::get('/admin','PostController@displayUser');
Route::get('/yourpost','PostController@yourpost');
Route::get('/delete/{id}','PostController@deletepost');
Route::post('/edit/{id}','PostController@editpost');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

