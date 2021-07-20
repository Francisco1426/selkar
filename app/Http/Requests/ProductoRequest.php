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
            'imagen' => ["nullable", "image"],
            'categorias_id' => ['required'],
            'estatus_id' => ['required'],
            'descripcion' => ['required']
        ];
    }
}
