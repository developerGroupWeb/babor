<?php

namespace App\Http\Controllers\Authentic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Authentic\SingUpService;
use App\Http\Requests\Authentic\SingUpFormRequest;


class SingupController extends Controller
{
    function singUp(){

        return view('authentic.sing_up');
    }

    function store(SingUpFormRequest $request){

        $error = SingUpService::checkDate([
            $request->input('day'),
            $request->input('month'),
            $request->input('year')
        ]);

        if(isset($error) && $error != ''){

            return view('authentic.sing_up', ['error' => $error]);
        }else{

            if(SingUpService::storeService($request) == true)
                return redirect()->route('sing_in', ['ref' => 'enjoy']);
        }

    }
}
