<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sinhvien extends Model
{
    protected $table = "sinhvien";
    public $timestamps = false;
    protected $primaryKey = 'mssv';
    protected $keyType = 'string';

    public function the()
    {
    	return $this->hasOne('App\dang_ky_the', 'mssv');
    }
}
