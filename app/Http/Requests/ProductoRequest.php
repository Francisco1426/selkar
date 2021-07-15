<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'clave' => ['required'],
            'nombre' => ['required'],
            'precio' => ['required'],
            'imagen' => ['required'],
            'estatus' => ['required'],
            'categoria' => ['required'],
            'descripcion' => ['required']
        ];
    }
}
