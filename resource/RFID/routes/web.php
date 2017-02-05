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

Route::get('goiR1', function() {
    return redirect()->route('R1');
});

Route::get('goi/controller', ['as'=>'R1', 'uses'=>'MyController@GetURL']);

Route::get('form', function(){
	return view('postForm');
});

Route::post('postForm', ['as'=>'postForm', 'uses'=>'MyController@postForm']);