<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstatuRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nombre'=>['required', "regex:/^[A-Z][A-z,a-z, ,á,é,í,ó,ú]+$/"],
            'descripcion' => ['required', "regex:/^[A-Z][A-z,a-z, ,á,é,í,ó,ú]+$/"],
        ];
    }
}
