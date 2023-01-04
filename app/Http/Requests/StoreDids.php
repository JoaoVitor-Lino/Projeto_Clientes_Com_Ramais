<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDids extends FormRequest
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
            'numero' => 'required|unique:dids|min:9|max:17',
            'descricao' => 'required|min:5|max:25',
        ];
    }

    public function messages() {
        return [
            'numero.required' => 'O campo número é obrigatório',
            'descricao.required' => 'O campo descriçã é obrigatório',
        ];
    }
}
