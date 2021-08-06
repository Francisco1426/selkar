<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [

        'razonsocial',
        'telefono',
        'email',
        'direccion',
        'representante',
        'celular',
        'estatus_id',
        'tipocliente',
        'estatuscliente'
    ];

    public function estatus()
    {
        return $this->belongsTo(Estatu::class);
    }


}
