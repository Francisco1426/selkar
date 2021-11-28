<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;
    protected $table = 'cotizaciones';
    protected $fillable = [
        'clave',
        'vendedor',
        'titulo',
        'cliente_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    public function cotizaciones() {
        return $this->belongsTo(
            detallecotizaciones::class,
            'id',
            'cotizacion_id',
        );
    }
}
