<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 25/11/2018
 * Time: 12:20
 */

namespace App\Services\Authentic;

use App\models\User;
use App\models\Data;


class SingInService
{
    static function checkUser($request){

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