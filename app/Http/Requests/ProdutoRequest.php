<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'=>'required|min:3',
            'descricao'=>'required|max:200',
            'valor'=>'required|numeric',
            'quantidade'=>'required|numeric',
            'tamanho'=>'required|max:50'
        ];
    }

    public function messages(){
        return[
            'required'=>':attribute é obrigatório.',
            'numeric'=>':attribute deve ser um número.'
        ];
    }
}
