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
            'ramal' => [
                'required',
                'min:4',
                'max:5',
            ],
            'nomes' =>   [
                'required',
                'min:4',
                'max:15',
            ],
            'tipo' => [
                'required',
                'min:3',
                'max:3',
            ],
            'bina' => [
                'required',
                'min:10',
                'max:15',
            ],
            'cliente_id' => 'required',
        ];
    }
    public function messages() {
        return [
            'ramal.required' => 'O campo ramal é obrigatório',
            'ramal.min' => 'O mínimo de digitos é de 4 digitos',
            'ramal.max' => 'O máximo de digitos é 5 digitos',

            'nomes.required' => 'O campo nome é obrigatório',
            'nomes.min' => 'O mínimo é 4 letras',
            'nomes.max' => 'É permitido o máximo de 15 letras',

            'tipo.required' => 'Selecione entre as opções SIP ou Web',
            'tipo.max' => 'Selecione entre as opções SIP ou Web',
            'tipo.min' => 'Selecione entre as opções SIP ou Web',

            'bina.required' => 'O campo bina é obrigatório',
            'bina.min' => 'O mínimo é de 10 digitos',
            'bina.max' => 'O máximo é 15 digitos',

            'cliente_id.required' => 'O campo clientes é obrigatorio',
        ];
    }
}
