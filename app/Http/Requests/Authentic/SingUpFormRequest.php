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
            'day' => ['required']
        ];
    }
}
