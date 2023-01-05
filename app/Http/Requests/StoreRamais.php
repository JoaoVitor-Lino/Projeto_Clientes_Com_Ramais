<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRamais extends FormRequest
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
            'ramal' => 'required|min:4|max:5',
            'nome' =>   'required|min:4|max:15',
            'tipo' => 'required|min:3|max:3',
            'bina' => 'required|min:10|max:15',
            
        ];
    }
    public function messages() {
        return [
            'ramal.required' => 'O campo ramal é obrigatório',
            'nome.required' => 'O campo nome é obrigatório',
            'tipo.max' => 'Selecione entre as opções SIP ou Web',
            'bina.required' => 'O campo bina é obrigatório',
        ];
    }
}
