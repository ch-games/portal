<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class AdminController extends Controller
{
    //
    function lotteryUpdate($type) {
    	return Config::get("lotterytypes.{$type}");;
    }
}
