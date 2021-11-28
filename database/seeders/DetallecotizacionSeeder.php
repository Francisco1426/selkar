<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallecotizacionSeeder extends Seeder
{

    public function run()
    {
        DB::table('detallecotizaciones')->insert([
            'cantidad' => '2',
            'fecha' => '2021-08-21',
            'precio_unitario' => '5000',
            'descripcion' => 'Caja seca de 3 mts color blanca',
            'descuento' => '5%',
            'precio_total' => '4500',
            'vigencia' => '30 dias',
            'tiempo_estimado' =>  '45 dias habiles',
            'cotizacion_id' => 1,
            'producto_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
