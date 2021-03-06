<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Estatu extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'nombre','descripcion'
    ];

    public function materiales()
    {
        return $this->hasOne(Material::class);
    }

    public function clientes()
    {
        return $this->hasOne(Cliente::class);
    }

    public function categorias()
    {
        return $this->hasOne(Categoria::class);
    }


    public function productos()
    {
        return $this->hasOne(Producto::class);
    }
    public function fases()
    {
        return $this->hasOne(Fase::class);
    }
}
