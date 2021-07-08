<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nombre' => 'equired|min:2|max:10',
            'email' => 'unique|email|',
            'telefono' => 'min:10|number|unique'
            'descripcion' =>
        ];
    }
}
