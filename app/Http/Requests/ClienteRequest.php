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
            'telefono' => ['required'],
            'celular' => ['required'],
            'email' => ['required'],
            'direccion' => ['required'],
            'representante' => ['required'],
            'tipocliente' => ['required'],
            'estatuscliente' => ['required'],
            'estatus_id' => ['required']

        ];
    }
}
