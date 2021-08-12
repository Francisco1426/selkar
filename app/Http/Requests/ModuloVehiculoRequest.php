<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuloVehiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vehiculo_id' =>['required'],
            'id_material.*' => ['required'],
            'observaciones_material.*'=> ['required'],
            'fecha_material.*' => ['required'],
            'fases_material.*' => ['required'],
            'cantidad_material.*' => ['required']
        ];
    }
}
