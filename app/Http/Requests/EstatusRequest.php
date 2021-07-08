<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstatusRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nombre' => ["required"],
            'descripcion' => ["required"],
        ];
    }
}
