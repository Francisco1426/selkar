<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('fases')->insert([
            'nombre' => 'Paileria',
            'descripcion' => 'Estructura del producto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('fases')->insert([
            'nombre' => 'Acabado',
            'descripcion' => 'Detallar el producto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
