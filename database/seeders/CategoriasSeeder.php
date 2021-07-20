<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{

    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Pipas',
            'descripcion' => 'Pipas de todas las medidas',
            'estatus_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Volteos',
            'descripcion' => 'Volteos de todas las medidas',
            'estatus_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Contenedores',
            'descripcion' => 'Contenedores de todas las medidas',
            'estatus_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Redilas',
            'descripcion' => 'Redilas de todas las medidas',
            'estatus_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
