<?php

namespace App\Http\Controllers;

use Request;
class UserController extends Controller
{
    //
    public function index($type)
    {
        return view("user.{$type}");
    }

}
