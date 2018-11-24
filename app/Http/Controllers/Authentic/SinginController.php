<?php

namespace App\Http\Controllers\Authentic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use App\models\Data;

class SinginController extends Controller
{
    function singIn(){

        return view('authentic.sing_in');
    }

    function check(Request $request){

        $row   = Data::where(['email' => $request->input('login')])
                     ->orWhere(['number' => $request->input('login')])
                     ->first();

        $error = '';

        if(isset($row)){

            if(password_verify($request->input('password'), $row->password)){

                // verify if user check remember

            }else{

                $error =  'Password incorrect';
            }
        }else{

            $error =  'Identifiant incorrect';
        }
        echo $error;
    }
}
