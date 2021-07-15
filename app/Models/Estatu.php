<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatu extends Model
{
    use HasFactory;
    protected $fillable = [
<<<<<<< HEAD
<<<<<<< HEAD
        'nombre', 'descripcion'
=======
        'nombre','descripcion'
>>>>>>> Eduardo
=======
        'nombre',
        'descripcion'
>>>>>>> Omar
    ];

    public function clientes()
    {
        return $this->hasOne(Cliente::class);
    }

    public function categorias()
    {
        return $this->hasOne(Categoria::class);
    }

}
