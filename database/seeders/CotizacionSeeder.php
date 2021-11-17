<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CotizacionSeeder extends Seeder
{

    public function run()
    {
        DB::table('cotizaciones')->insert([
            'titulo' => 'Cotizacion caja seca',
            'cliente_id' => 1,
            'producto_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
