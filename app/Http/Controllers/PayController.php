<?php

namespace App\Http\Controllers;

use Request;
class PayController extends Controller
{
    //
    public function index($type)
    {
        return view("pay.{$type}");
    }

}
