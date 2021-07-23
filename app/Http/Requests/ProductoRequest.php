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
            'precioinicial' => ['required'],
            'stock' => ['required'],
            'presentacion' => ['required'],
            'imagen' => ["image"],
            'categorias_id' => ['required'],
            'estatus_id' => ['required'],
            'descripcion' => ['required'],
            'tipoproducto' => ['required']
        ];
    }
}
