<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['clave','nombre','precio','imagen','descripcion','estatus_id','categorias_id'];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function estatus()
    {
        return $this->belongsTo(Estatu::class);
    }
}
