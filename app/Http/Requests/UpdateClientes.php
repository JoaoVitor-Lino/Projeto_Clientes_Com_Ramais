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
        return [
            'nome' => 'required|string|min:5|max:30',
            'telefone' => 'required|min:7|max:17',
            'email' => 'required|min:10|max:30',
            'endereco' => 'required|min:10|max:30',
            'tipo' => 'required',
            'documento' => 'required|min:11|max:20',
        ];
    }

    public function messages() 
    {
        return [
            'nome.required' => 'O campo nome é obrigatorio',
            'telefone.required' => 'O campo telefone é obrigatorio',
            'email.required' => 'O campo email é obrigatorio',
            'endereco.required' => 'O campo endereco é obrigatorio',
            'tipo.required' => 'Selecione entre os tipos Físico ou Jurídico',
            'documento.required' => 'O campo documento é obrigatorio',
        ]; 
    }
}
