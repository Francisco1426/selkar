<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatu extends Model
{
    use HasFactory;
    protected $table = 'estatus';
    protected $fillable = [
        'nombre','descripcion'
    ];
    public function materiales()
    {
        return $this->hasOne(Material::class);
    }
}
