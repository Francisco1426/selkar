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
            'nombre' => ['required'],
            'medida' => ['required'],
            'tipomaterial' => ['required'],
            'descripcion' => ['required'],
            'estatus_id' => ['required'],
        ];
    }
}
