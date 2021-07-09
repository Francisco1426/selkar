<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','porcentaje','descripcion','ventas_id','fases_id','fecha_inicial','fecha_final'
    ];
}
