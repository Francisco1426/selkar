<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','marca','descripcion','fecha','numeroserie','cliente_id','producto_id'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function materialVehiculos()
    {
        return $this->belongsToMany(Material::class, 'material_vehiculos')
                    ->withPivot([
                        'cantidad',
                        'observaciones',
                        'fecha',
                        'fase_id',
                    ]);
    }
}
