<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Producto extends Model
{
    use HasFactory, softDeletes;
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
    //accesor
    public function getNombreAttribute($value)
    {
        return ucfirst($value);
    }

    public function getDescripcionAttribute($value)
    {
        return ucfirst($value);
    }


}
