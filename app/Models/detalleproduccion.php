<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleproduccion extends Model
{
    use HasFactory;
    protected $fillable = [
        'materialadicional','razones','producciones_id'
    ];
}
