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
            'clave' => ['nullable'],
            'nombre' => ['required'],
            'preciodistribuidor' => ['required'],
            'preciocontado' => ['required'],
            'preciopublico' => ['required'],
            'dimension' => ['required'],
            'stock' => ['numeric','required','regex:/^[0-9]+/'],
            'presentacion' => ['required','regex:/^[A-Z]{1}[a-z]{2}/'],
            'imagen' => ["nullable","image"],
            'categorias_id' => ['required','exists:categorias,id'],
            'estatus_id' => ['required','exists:estatus,id'],
            'descripcion' => ['required'],
            'tipoproducto' => ['required']
        ];
    }
}
