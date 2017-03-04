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

    public function login()
    {
        return view('login');
    }

    public function goAdmin()
    {
        if (\Session::has('uname')) {
            return view('admin');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function login_process(Request $request)
    {
        $taikhoan = taikhoan::find($request->uname);
        if ($taikhoan == null) {
            \Session::put('err', '1');
            return redirect()->route('login');
        }
        
        if ($taikhoan->KT_taikhoan($request->pass)) {
            \Session::put('uname', $request->uname);
            return redirect('/trangquantri');
        } else {
            \Session::put('err', '1');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        \Session::forget('uname');
        \Session::forget('err');
        return redirect('/');
    }
}
