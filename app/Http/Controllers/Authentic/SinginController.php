<?php

namespace App\Http\Controllers\Authentic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Authentic\SingInService;


class SinginController extends Controller
{
    function singIn(){

        return view('authentic.sing_in');
    }

    function check(Request $request){

        SingInService::checkUser($request);
    }
}
