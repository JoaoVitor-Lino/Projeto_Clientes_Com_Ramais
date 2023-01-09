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
            'descricao' => [
                'required',
                'min:5',
                'max:25',
            ],
            'cliente_id' => [
                'required',
            ],
        ];
    }
    public function messages() {
        return [
            'numero.required' => 'O campo número é obrigatório',
            'numero.unique' => 'O número já existe, verifique se o digito está correto',
            'numero.min' => 'O mínimo de números é de 9 digitos',
            'numero.max' => 'O maximo de números é 17 digitos',
            
            'descricao.required' => 'O campo descrição é obrigatório',
            'descricao.min' => 'O mínimo de letras é de 9 digitos',
            'descricao.max' => 'O maximo de letras é 25 digitos',
            
            'cliente_id.required' => 'O campo clientes é obrigatorio', 
        ];
    }
}
