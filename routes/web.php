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

// URL[XXX.jp/admin/~~]
Route::group(['prefix' => 'admin'], function() {
	// URL => Controller@Action
	Route::get('news/create', 'Admin\NewsController@add');
	Route::get('profile/create', 'Admin\ProfileController@add');
	Route::get('profile/edit', 'Admin\ProfileController@edit');
});
