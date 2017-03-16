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

Route::get('/', 'MyController@GetViewHome');

Route::post('postForm', 'MyController@postForm');

Route::get('login', 'MyController@login')->name('login');

Route::post('login_process', 'MyController@login_process');

Route::get('trangquantri', 'MyController@goAdmin')->name('goAdmin');

Route::post('Input_card', ['as'=>'admin', 'uses'=>'MyController@Res_card']);

Route::get('logout', 'MyController@logout');

Route::post('AddSV', 'MyController@AddSV');

Route::get('XoaSV/{mssv}', 'MyController@XoaSV');

Route::get('SuaSV/{mssv}', 'MyController@SuaSV');

Route::post('XuLySuaSV', 'MyController@XuLySuaSV');

Route::post('DangKiThe', 'MyController@DangKiThe');