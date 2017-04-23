<?php

namespace App\Http\Controllers;

use Request;
class BuyController extends Controller
{
    //
    public function buy($type)
    {
        return view("buy_{$type}");
    }
    
    public function tz($type) {
        $data = Request::all();
    	return $data;
    }
}
