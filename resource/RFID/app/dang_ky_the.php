<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dang_ky_the extends Model
{
    protected $table = "dang_ky_the";
    public $timestamps = false;

    public function sinhvien()
    {
    	return $this->belongsTo('App\sinhvien', 'mssv', 'mssv');
    }
}
