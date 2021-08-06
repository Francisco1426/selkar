<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['tipoproducto','clave','nombre','presentacion','stock','dimension','preciodistribuidor','preciocontado','preciopublico','imagen','categorias_id','estatus_id','descripcion'];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function estatus()
    {
        return $this->belongsTo(Estatu::class);
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
