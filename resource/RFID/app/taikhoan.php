<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taikhoan extends Model
{
    protected $table = "users";
    public $timestamps = false;
    protected $primaryKey = 'name';
}
