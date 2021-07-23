<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcesoRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nombre'=> ['required'],
            'descripcion' => ['required'],
            'estatus_id' => ['required'],
        ];
    }
}
