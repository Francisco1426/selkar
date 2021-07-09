<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [

        'razonsocial','rfc','telefono','celular','email','domicilio','colonia','municipio','cp','representante','tipocliente','estatus_id'
    ];

    public function estatus()
    {
        return $this->belongsTo(Estatu::class, 'estatus_id');
    }


}