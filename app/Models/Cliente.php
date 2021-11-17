<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cliente extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'nombre',
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

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
    public function getRepresentanteAttribute($value)
    {
        return ucfirst($value);
    }

    public function getRazonsocialAttribute($value)
    {
        return ucfirst($value);
    }
}
