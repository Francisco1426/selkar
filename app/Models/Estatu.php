<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatu extends Model
{
    use HasFactory;
    protected $table = 'estatus';
    protected $fillable = [
<<<<<<< HEAD
        'nombre','descripcion'
    ];
    public function materiales()
    {
        return $this->hasOne(Material::class);
    }
=======
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

>>>>>>> 08a18248812432d4b309b4ec1ef12cf0c82ed9f2
}
