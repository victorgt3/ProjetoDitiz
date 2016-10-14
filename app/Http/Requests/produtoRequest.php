<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class produtoRequest extends Request
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
    public function messages()
    {
        return [
            'descricao.required'=>'Preencha um descricao',
            'descricao.max'=>'descricao deve ter até 255 caracteres',
            'preco.required'=>'Preencha um preco',
            'preco.max'=>'preco deve ter até 255 caracteres',
            

        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'descricao'=>'required|max:255',
            'preco'=>'required|max:255',
            
        ];
    }
}
