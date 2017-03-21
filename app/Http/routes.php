<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('home', 'HomeController@index');
Route::get('post/create', 'PostController@create')->name('post.create');
Route::post('post/store', 'PostController@store')->name('post.save');
Route::get('/', 'PostController@index')->name('post.index');
Route::get('post/{id}/show', 'PostController@show')->name('post.show');
Route::get('post/{id}/edit', 'PostController@edit')->name('post.edit');
Route::post('post/{id}/update', 'PostController@update')->name('post.update');
Route::get('post/{id}/delete', 'PostController@delete')->name('post.delete');

Route::get('{id}/apply','ApplyController@apply')->name('apply');
Route::post('apply/store', 'AppliesController@store')->name('apply.store');