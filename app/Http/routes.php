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

//Route::auth();
Route::get('home2', function () {
    return view('home2');
});
Route::get('test', function () {
    return view('test');
});
Route::get('home', 'HomeController@index')->name('home');
Route::get('post/create', 'PostController@create')->name('post.create');
Route::post('post/store', 'PostController@store')->name('post.save');
Route::post('post/testAjax', 'PostController@testAjax')->name('post.ajax');

Route::get('/', 'PostController@index')->name('post.index');
Route::get('post/{id}/show', 'PostController@show')->name('post.show');
Route::get('post/{id}/edit', 'PostController@edit')->name('post.edit');
Route::post('post/{id}/update', 'PostController@update')->name('post.update');
Route::get('post/{id}/delete', 'PostController@delete')->name('post.delete');

Route::get('{id}/apply','ApplyController@apply')->name('apply');
Route::post('apply/store', 'ApplyController@store')->name('apply.store');

//homeCategories
Route::get('home/items', 'HomeCategoryController@index')->name('home.items');
//Route::post('home/create', 'HomeCategoryController@create')->name('home.create');
Route::post('home/store', 'HomeContentController@store')->name('home.create');

//homeContent
Route::get('homeContent', 'HomeContentController@index')->name('home.index');
Route::get('home/items/{id}/edit', 'HomeContentController@edit')->name('home.editItem');
Route::post('home/items/{id}/update', 'HomeContentController@update')->name('home.updateItem');
Route::get('home/items/{id}/delete', 'HomeContentController@delete')->name('home.deleteItem');