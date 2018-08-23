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

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){

	Route::get('/',function(){
		return view('admin.index');
	})->name('admin.inicio');

	Route::resource('business','BusinessController');
	Route::get('business/{id}/destroy',[
		'uses'=>'BusinessController@destroy',
		'as'=>'business.destroy'
	]);

});

Auth::routes();

Route::get('/', 'HomeController@index');
