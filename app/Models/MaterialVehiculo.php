<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class MaterialVehiculo extends Pivot
{
    protected $table = 'material_vehiculos';
    use HasFactory;
    protected $fillable =[
        'id',
        'cantidad',
        'observaciones',
        'fecha',
        'fase_id',
        'material_id',
        'vehiculo_id'

    ];
}
