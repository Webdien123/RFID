<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sinhvien extends Model
{
    protected $table = "sinhvien";
    public $timestamps = false;
    protected $primaryKey = 'mssv';

    public function dang_ky_the()
    {
    	return $this->hasOne('App\dang_ky_the', 'mssv');
    }
}
