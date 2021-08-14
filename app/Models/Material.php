<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Material extends Model
{
    use HasFactory;
    protected $table='materiales';
    protected $fillable = [
       'clave', 'nombre','medida','tipomaterial','descripcion','existente','estatus_id'
    ];

    public function estatus()
    {
        return $this->belongsTo(Estatu::class);
    }
    public function getNombreAttribute($value)
    {
        return ucfirst($value);
    }
}
