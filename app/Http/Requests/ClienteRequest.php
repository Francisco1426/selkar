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
            'telefono' => ['required','numeric','regex:/^[0-9]{10}/'],
            'celular' => ['required','numeric','regex:/^[0-9]{10}/'],
            'email' => ['required','email'],
            'direccion' => ['required','min:3'],
            'representante' => ['required','regex:/^[A-Z]{1}[a-z]+ /'],
            'tipocliente' => ['required'],
            'estatuscliente' => ['required'],
            'estatus_id' => ['required','exists:categorias,id']

        ];
    }
}
