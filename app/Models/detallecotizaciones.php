<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detallecotizaciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'cantidad',
        'fecha',
        'precio_unitario',
        'descripcion',
        'descuento',
        'precio_total',
        'vigencia',
        'tiempo_estimado',
        'cotizacion_id',
        'producto_id'
    ];
}
