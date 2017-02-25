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
Route::get('qb/get', function() {
	// $data = DB::select('select * from sinhvien order by hoten');
    $data = DB::table('sinhvien')
    ->orderBy('hoten', 'asc')->skip(1)->take(5)->get();
       foreach ($data as $row) {
        foreach ($row as $key => $value) {
                echo $key.' : '.$value."<br>";
        }
        echo "<hr>";
    }
});

Route::get('model/themsv', function() {
    try {
        $sv = new App\sinhvien();
        $sv->mssv = "B1300011";
        $sv->hoten = "Nguyễn Văn Ve";
        $sv->sdt = "0919000011";

        $sv->save();
        echo "Thêm SV thành công";
    } catch (Exception $e) {
        echo "Thêm SV thất bại</br>";
        echo $e->getMessage();
    }
    
});

Route::get('model/getsv', function() {
    try {
        $data = App\sinhvien::all()->toArray();
        foreach ($data as $row) {
        foreach ($row as $key => $value) {
                echo $key.' : '.$value."<br>";
        }
        echo "<hr>";
        }
    } catch (Exception $e) {
        echo "Lấy DS sv thất bại</br>";
        echo $e->getMessage();    
    }
});

Route::get('xoabang', function() {
    Schema::dropIfExists('dang_ky_the');
    Schema::dropIfExists('sinhvien');
    Schema::dropIfExists('migrations');
    echo "Đã xóa các bảng";
});