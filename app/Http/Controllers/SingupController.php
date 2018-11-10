<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingupController extends Controller
{
    function singUp(){

        return view('authentic.sing_up');
    }
}
