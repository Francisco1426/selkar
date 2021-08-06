<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{

    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Carrocerias',
            'descripcion' => 'Carrocerias varias',
            'estatus_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Remolques',
            'descripcion' => 'Remolques varios',
            'estatus_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


    }
}
