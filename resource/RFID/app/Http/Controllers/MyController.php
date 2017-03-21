<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\taikhoan;
use App\sinhvien;
use App\dang_ky_the;

class MyController extends Controller
{
    public function GetViewHome(Request $request)
    {
        return view('home');
    }

    public function Res_card(Request $request)
    {
        $the = dang_ky_the::find($request->id);
        if($the){
            $sv = $the->sinhvien;
            return view('input_card',['mathe'=>($request->id), 'sv' => $sv]);    
        }
        else{
            return view('non_res_card');
        }
        
    }

    public function login()
    {
        return view('login');
    }

    public function goAdmin()
    {
        if (\Session::has('uname')) {
            $danhsachsv = \DB::table('sinhvien')->where('dangki', false)->get();
            return view('admin', ['danhsachsv' => $danhsachsv]);
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
            return redirect()->route('goAdmin');
        } else {
            \Session::put('err', '1');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        \Session::forget('uname');
        \Session::forget('err');
        return redirect()->route('GetViewHome');
    }

    public function AddSV(Request $request)
    {
        try {
            sinhvien::Them_SV($request->mssv, $request->hoten, $request->sdt, 
                $request->ngsinh);
            return redirect()->route('goAdmin');
        } catch (Exception $e) {
            echo "Thêm thất bại"."<br>";
            echo $e->getMessage();
        }
    }

    public static function XoaSV($mssv)
    {
        $sinhvien = sinhvien::find($mssv);
        if ($sinhvien != null) {
            try {
                $sinhvien->delete();
                return redirect()->route('goAdmin');
            } catch (Exception $e) {
                echo "Xóa thất bại"."<br>";
                echo $e->getMessage();
            }
        }
    }

    public function SuaSV($mssv)
    {
        $sinhvien = sinhvien::find($mssv);
        if ($sinhvien != null) {;
            return view('Edit', ['sv' => $sinhvien]);
        }
    }

    public function XuLySuaSV(Request $request)
    {
        sinhvien::CapNhat_SV($request->mssv, $request->hoten, 
            $request->sdt, $request->ngsinh);
        $sinhvien = sinhvien::find($request->mssv);
        if($sinhvien->dangki == 'false')
            return redirect()->route('goAdmin');
        else
            return redirect()->route('XoaThe');
    }

    public function DangKiThe(Request $request)
    {
        try {
            dang_ky_the::Them_The($request->id, $request->mssv);
        } catch (\Exception $e) {
            \Session::put('kq_dki', 'failed_card');
            if (strlen($request->id) > 10) {
                \Session::put('kq_dki', 'invalid_card');
            }
            return redirect()->route('goAdmin');
        }
        
        sinhvien::CapNhat_DangKi($request->mssv);

        $sinhvien = sinhvien::find($request->mssv);
        \Session::put('kq_dki', 'success');
        \Session::put('sv_dki', $sinhvien->hoten);
        return redirect()->route('goAdmin');
    }

    public function XoaThe()
    {
        $danhsachthe = dang_ky_the::all();
        return view('XoaThe', ['danhsachthe' => $danhsachthe]);
    }

    public function XuLyXoaThe($id, $xoasv)
    {
        $the = dang_ky_the::find($id);
        if($the){
            try {
                $mssv = $the->sinhvien->mssv;
                $the->delete();
                if($xoasv == "true"){
                    MyController::XoaSV($mssv);
                    echo "Xóa cả thông tin sinh viên";
                }
                else{
                    sinhvien::CapNhat_DangKi($mssv);
                    echo "Không xóa thông tin";
                }
                return redirect()->route('XoaThe');
            } catch (\Exception $e) {
                echo "Xóa thẻ thất bại<br>";
                echo $e->getMessage();
            }
        }
    }
}
