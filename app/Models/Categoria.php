<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','descripcion','estatus_id'
    ];

   public function estatus()
   {
         return $this->belongsTo(Estatu::class);
   }

   public function productos()
   {
       return $this->hasMany(Producto::class);
   }

   public function getNombreAttribute($value)
   {
       return ucfirst($value);
   }
}
