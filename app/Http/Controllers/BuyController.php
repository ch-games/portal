<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    //
    public function buy($type)
    {
        return view("buy_{$type}");
    }
    
    public function tz($type) {
    	;
    }
}
