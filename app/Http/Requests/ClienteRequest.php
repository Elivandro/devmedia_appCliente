<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->id ?? '';

        $rules = [
            'nome' => 'required|string|min:3|max:255',
            'email' => 'required|email|max:255|unique:clientes,email,{$id},id',
            'endereco' => 'required|string|max:255'
        ];

        return $rules;
    }
}
