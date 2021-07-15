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
            'nombre' => ['required' , "regex:/^[A-Z][A-z,a-z, ,á,é,í,ó,ú]+$/"],
            'medida' => ['required' , "regex:/^[A-Z][A-z,a-z, ,á,é,í,ó,ú]+$/"],
            'tipomaterial' => ['required'],
            'descripcion' => ['required' , "regex:/^[A-Z][A-z,a-z, ,á,é,í,ó,ú]+$/"],
            'estatus_id' => ['required'],
        ];
    }
}
