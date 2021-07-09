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
        return [
            'nombre' => ['required'],
            'app' => ['required'],
            'apm' => ['required'],
            'email' => ['required'],
            'telefono' => ['required'],
            'rfc' => ['required'],
            'tipocliente' => ['required']
        ];
    }
}
