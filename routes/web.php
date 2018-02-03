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

Route::get('/', 'BlogController@index');

Route::get('/post/new', 'BlogController@newPost')->name('newPost');
Route::post('/post/new', 'BlogController@createPost')->name('createPost');

Route::get('/post/{id}', 'BlogController@viewPost')->name('viewPost');
Route::post('/post/{id}/comment', 'BlogController@createComment')->name('createComment');
