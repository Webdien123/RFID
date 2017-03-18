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

    public function AddSV(Request $request)
    {
        try {
            $sinhvien = new sinhvien();
            $sinhvien->hoten = $request->hoten;
            $sinhvien->mssv = $request->mssv;
            $sinhvien->sdt = $request->sdt;
            $sinhvien->ngsinh = $request->ngsinh;
            $sinhvien->dangki = false;
            $sinhvien->save();
            return redirect('/trangquantri');
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
                return redirect('/trangquantri');
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
        $sinhvien = sinhvien::find($request->mssv);
        if ($sinhvien != null) {
            try {
                $sinhvien->hoten = $request->hoten;
                $sinhvien->sdt = $request->sdt;
                $sinhvien->ngsinh = $request->ngsinh;
                $sinhvien->save();
                if($sinhvien->dangki == 'false')
                    return redirect('/trangquantri');
                else
                    return redirect('/XoaThe');
            } catch (\Exception $e) {
                \Session::put('kq_dki', 'failed_update');
                return redirect('/SuaSV/' . $request->mssv);
            }
        }
    }

    public function DangKiThe(Request $request)
    {
        try {
            $dkthe = new dang_ky_the();
            $dkthe->id = $request->id;
            $dkthe->mssv = $request->mssv;
            $dkthe->save();
        } catch (\Exception $e) {
            \Session::put('kq_dki', 'failed_card');
            return redirect('trangquantri');
        }

        try {
            $sinhvien = sinhvien::find($request->mssv);
            $sinhvien->dangki = true;
            $sinhvien->save();
        } catch (\Exception $e) {
            \Session::put('kq_dki', 'failed_sv');
            return redirect('trangquantri');
        }

        \Session::put('kq_dki', 'success');
        \Session::put('sv_dki', $sinhvien->hoten);
        return redirect('trangquantri');
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
                $the->delete();
                if($xoasv == "true"){
                    $sinhvien = $the->sinhvien;
                    MyController::XoaSV($sinhvien->mssv);
                }
                else{
                    $sinhvien = $the->sinhvien;
                    $sinhvien->dangki = false;
                    $sinhvien->save();
                }
                return redirect('/trangquantri');
            } catch (\Exception $e) {
                echo "Xóa thẻ thất bại<br>";
                echo $e->getMessage();
            }
        }
    }
}
