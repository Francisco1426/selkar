<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombre',
        'descripcion',
        'estatus_id'
    ];

    public function estatus()
    {
        return $this->belongsTo(Estatu::class);
    }
}
