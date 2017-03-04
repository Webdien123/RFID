<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\taikhoan;

class MyController extends Controller
{
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
        $taikhoan = taikhoan::find($request->uname);
        if ($taikhoan == null) {
            \Session::put('err', '1');
            return view('login');
        }
        
        if ($taikhoan->KT_taikhoan($request->pass)) {
            echo "</br>Đăng nhập thành công";
        } else {
            \Session::put('err', '1');
            echo "</br>Đăng nhập thất bại";
        }
        
    }
}
