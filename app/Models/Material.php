<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Material extends Model
{
    use HasFactory;
    protected $table='materiales';
    protected $fillable = [
        'nombre','medida','tipomaterial','descripcion','estatus_id'
    ];

    public function estatus()
    {
        return $this->belongsTo(Estatu::class);
    }
}
