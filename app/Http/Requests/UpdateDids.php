<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDids extends FormRequest
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
        $id = $this->segment(2);
        return [
            'numero' => [
                'required',
                "unique:dids,numero,{$id},id",
                'min:9',
                'max:17',         
        ],
            'descricao' => 'required|min:5|max:25',
            'cliente_id' => 'required',
        ];
    }
    public function messages() {
        return [
            'numero.required' => 'O campo número é obrigatório',
            'descricao.required' => 'O campo descrição é obrigatório',
            'numero.unique' => 'Numero ja cadastrado',
            'cliente_id.required' => 'O campo clientes é obrigatorio',  
        ];
    }
}
