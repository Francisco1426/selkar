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
            'razonsocial' => ['required'],
            'rfc' => ['required'],
            'telefono' => ['required'],
            'celular' => ['required'],
            'email' => ['required'],
            'direccion' => ['required'],
            'colonia' => ['required'],
            'municipio' => ['required'],
            'cp' => ['required'],
            'representante' => ['required'],
            'tipocliente' => ['required'],
            'estatus_id' => ['required']

        ];
    }
}
