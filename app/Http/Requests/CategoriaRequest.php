<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nombre' => ['required'],
            'estatus_id' => ['required','exists:estatus,id'],
            'descripcion' => ['required','min:3']
        ];
    }
}
