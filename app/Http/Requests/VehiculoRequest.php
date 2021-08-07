<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'nombre' => ['required'],
            'marca' => ['required'],
            'descripcion' =>['required'],
            'numeroserie' => ['required'],
            'fecha' => ['required'],
            'cliente_id' => ['required'],
            'producto_id' =>['required']
        ];
    }
}
