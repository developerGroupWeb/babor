<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 25/11/2018
 * Time: 12:28
 */

namespace App\Services\Authentic;

use App\models\User;
use App\models\Data;


class SingUpService
{
    static function storeService($request){

        $success = false;

        //dd($request->all());

        $user = new User;
        $data = new Data;

        $create_user = User::create([

            'name' => $user->setName($request->input('name')),
        ]);

        $create_data = Data::create([

            'user_id'   => $create_user->id,
            'user_name' => $create_user->name,
            'email'     => $request->input('email'),
            'birth'     => $data->setBirthDay([
                $request->input('day'),
                $request->input('month'),
                $request->input('year'),
            ]),
            'gender'   => $request->input('gender'),
            'city'     => $request->input('city'),
            'password' => $data->hashPassword($request->input('password')),
            'remember' => $request->input('remember'),
        ]);

        if($create_user && $create_data){

            $success = true;
        }

        return $success;

    }

    static function checkDate($tab = []){

        $error = '';

        if($tab[1] != '' && $tab[0] != '' && $tab[2] != ''){

            if(checkdate($tab[1], $tab[0], $tab[2]) == false){

                $error = 'Le champ date d\'anniversaire est incorrect';
            }
        }else{

            $error = 'Le champ date d\'anniversaire doit être rempli';
        }

        return $error;
    }
}