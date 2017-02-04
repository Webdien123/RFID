<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	echo "string";    
    }
}
