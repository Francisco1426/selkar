<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusSeeder extends Seeder
{

    public function run()
    {
        DB::table('estatus')->insert([
            'nombre' => 'Activo',
            'descripcion' => 'Este es el estatus que estara activo siempre',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('estatus')->insert([
            'nombre' => 'Inactivo',
            'descripcion' => 'Este es el estatus que estara inactivo siempre',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
