<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dang_ky_the extends Model
{
    protected $table = "dang_ky_the";
    public $timestamps = false;
    protected $keyType = 'string';

    public function sinhvien()
    {
    	return $this->belongsTo('App\sinhvien', 'mssv', 'mssv');
    }

    public static function Them_The($id, $mssv)
    {
    	try {
	    	$dkthe = new dang_ky_the();
	        $dkthe->id = $id;
	        $dkthe->mssv = $mssv;
	        $dkthe->save();
        } catch (\Exception $e) {
            \Session::put('kq_dki', 'failed_card');
            return redirect('trangquantri');
        }
    }
}
