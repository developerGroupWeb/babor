<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinginController extends Controller
{
    function singIn(){

        return view('authentic.sing_in');
    }
}
