<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'telefone' => 'required|integer|min:11',
            'descricao' => 'required|string|min:3|max:255'
        ];

        return $rules;
    }
}
