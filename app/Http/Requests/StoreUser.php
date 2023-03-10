<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name'=> [
                'required',
            ],
            'email' => [
                'required',
            ],
            'password' => [
                'required',
                'confirmed'
            ],
        ];
    }

    public function messages() {
        return [
        'name.required' => 'O campo nome é obrigatório',
        'email.required' => 'O campo email é obrigatório',
        'password.required' => 'O campo senha é obrigatório',
        'password.confirmed' => 'As senhas encontram-se diferentes',
        ];
    }
}
