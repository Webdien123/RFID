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
    return view('home');
});

Route::get('goiR1', function() {
    return redirect()->route('R1');
});

Route::get('goi/controller', ['as'=>'R1', 'uses'=>'MyController@GetURL']);

//MAIN
Route::get('form', function(){
	return view('postForm');
});

Route::post('postForm', 'MyController@postForm');

Route::get('login', function() {
    return view('login');
});

// Route::post('Input_card', function($mathe) {
//     return view('input_card',['mathe'=>$mathe]);
// });

Route::get('trangquantri', function() {
   return view('admin');
});

Route::post('Input_card', ['as'=>'admin', 'uses'=>'MyController@Res_card']);

//database
Route::get('taobang', function() {
	try {
		Schema::create('sinhvien', function ($table) {
		    $table->string('hoten',50);
		    $table->string('mssv',8);
		    $table->string('sdt',11);
		    $table->primary('mssv');
		});
		echo "Tạo bảng thành công";
	} catch (Exception $e) {
		echo "Tạo bảng thất bại</br>";
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	
    	
});