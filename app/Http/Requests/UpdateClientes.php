<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientes extends FormRequest
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
            'nome' => [
                'required',
                'string',
                'min:5',
                'max:30',
            ],
            
            'telefone' => [
                'required',
                'min:7', 
                'max:17', 
            ],
            
            'email' => [
                'required',
                "unique:clientes,email,{$id},id",
                'min:10',
                'max:30',
            ],
            
            'endereco' => [
                'required',
                'min:10',
                'max:30',
            ],
            
            'tipo' => [
                'required',
                'max:8', 
            ],
            'documento' => [
                'required',
                "unique:clientes,documento,{$id},id",
                'min:11',
                'max:20',
            ],
        ];
    }

    public function messages() 
    {
        return [
            'nome.required' => 'O campo nome é obrigatorio',
            'nome.string' => 'O campo nome não aceita numeral',
            'nome.min' => 'O mínimo de letras é de 5 digitos',
            'nome.max' => 'O máximo de letras é 30 digitos',
            
            'telefone.required' => 'O campo telefone é obrigatorio',
            'telefone.min' => 'O mínimo de digitos permitido é de 7',
            'telefone.max' => 'O máximo de digitos permitido é de 17',
            
            'email.required' => 'O campo email é obrigatorio',
            'email.unique' => 'E-mail ja existente, verique se o digito esta correto',
            'email.min' => 'O mínimo de digitos permitido é de 10',
            'email.max' => 'O máximo de digitos permitido é de 30',

            'endereco.required' => 'O campo endereco é obrigatorio',
            'endereco.min' => 'O mínimo de digitos permitido é de 10',
            'endereco.max' => 'O máximo de digitos permitido é de 30',

            'tipo.required' => 'Selecione entre os tipos Físico ou Jurídico',
            'tipo.max' => 'Selecione entre as opções Físico ou Jurídico',

            'documento.required' => 'O campo documento é obrigatorio',
            'documento.unique' => 'Documento ja existente, verique se o digito esta correto',
            'documento.min' => 'O mínimo de digitos permitido é de 11',
            'documento.max' => 'O máximo de digitos permitido é de 20',
            
        ]; 
    }
}
