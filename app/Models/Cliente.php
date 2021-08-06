<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [

        'razonsocial',
        'rfc',
        'telefono',
        'email',
        'direccion',
        'colonia',
        'municipio',
        'cp',
        'representante',
        'celular',
        'estatus_id',
        'tipocliente'
    ];

    public function estatus()
    {
        return $this->belongsTo(Estatu::class);
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }


}
