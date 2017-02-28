<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\taikhoan;

class MyController extends Controller
{
    public function GetURL(Request $request)
    {
    	if($request->is('*'))
    		echo "Có từ này";
    	else
    		echo "Không có từ này";
    }

    public function postForm(Request $request)
    {
    	echo 'họ tên đã nhập: ' . $request->HoTen . "</br>";
        if($request->has('HoTen'))
            echo "Có tham số";
        else
            echo "Không có tham số";
    }

    public function GetViewAdmin(Request $request)
    {
        return view('admin');
    }

    public function Res_card(Request $request)
    {
        return view('input_card',['mathe'=>($request->id)]);
    }

    public function login_process(Request $request)
    {
        echo "username: ".$request->uname;
        echo "</br> password: ".$request->pass."</br>";

        $taikhoan = taikhoan::find($request->uname);
        if ($taikhoan->KT_taikhoan($request->pass)) {
            echo "</br>Đăng nhập thành công";
        } else {
            echo "</br>Đăng nhập thất bại";
        }
        
    }
}
