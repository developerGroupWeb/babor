<?php

namespace App\Http\Controllers\Authentic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use App\models\Data;

class SingupController extends Controller
{
    function singUp(){

        return view('authentic.sing_up');
    }

    function store(Request $request){

        //dd($request->all());

        $insert = new User;
        $insert->setName($request->input('name'));
        $insert->save();

        $insert_data = new Data;
        $insert_data->user_id = $insert->id;
        $insert_data->setName($request->input('name'));
        $insert_data->email = $request->input('email');
        $insert_data->birth = $insert_data->setBirthDay([
            $request->input('day'),
            $request->input('month'),
            $request->input('year'),
        ]);
        $insert_data->gender   = $request->input('gender');
        $insert_data->city     = $request->input('city');
        $insert_data->password = $insert_data->hashPassword($request->input('password')) ;
        $insert_data->remember = $request->input('remember');

        $insert_data->save();

        return redirect()->route('sing_in', ['ref' => 'enjoy']);

    }
}
