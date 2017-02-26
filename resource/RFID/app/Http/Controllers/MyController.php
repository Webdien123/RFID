<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function login(Request $request)
    {
        $username = $request->uname;
        $password = bcrypt($request->pass);

        if(Auth::attempt(['name'=>$username, 'password'=>$password])){
            return view('admin');
        }
        else
            return view('login');
    }
}
