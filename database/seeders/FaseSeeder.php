<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaseSeeder extends Seeder
{

    public function run()
    {
        DB::table('fases')->insert([
            'nombre' => 'Diseño',
            'descripcion' => 'Desarrollo del Dibujo',
            'estatus_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('fases')->insert([
            'nombre' => 'Habilitacion del material',
            'descripcion' => 'Cortes, Soldadura, etc..',
            'estatus_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('fases')->insert([
            'nombre' => 'Paileria',
            'descripcion' => 'Estructura del producto',
            'estatus_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('fases')->insert([
            'nombre' => 'Acabado',
            'descripcion' => 'Detallar el producto',
            'estatus_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
