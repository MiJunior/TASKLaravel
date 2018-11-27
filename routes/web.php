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


Route::get('/', 'PostController@index')
            ->name('posts');
Route::get('/create', 'PostController@create')
            ->name('post.create');
Route::post('/store', 'PostController@store')
    ->name('post.store');