<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'clave' => ['required','regex:/^[A-Z]{3}[-][0-9]+/'],
            'nombre' => ['required'],
            'medida' => ['required'],
            'tipomaterial' => ['required'],
            'existente' => ['required'],
            'descripcion' => ['required'],
            'estatus_id' => ['required'],
        ];
    }
}
