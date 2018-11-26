<?php

namespace App\Http\Requests\Authentic;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SingUpFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:data', 'string'],
            'city' => ['required', 'string'],
            'gender' => ['required', 'in:femme,homme'],
            'password' => ['required', 'min:8', 'alphanum'],
            'remember' => ['in:0,1'],
            'day' => [
                'required',
                Rule::in([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31]),
            ],
            'month' => [
                'required',
                Rule::in([1,2,3,4,5,6,7,8,9,10,11,12]),
            ],
            'year' => ['required', 'integer','min:4', 'max:4']
        ];
    }
}
