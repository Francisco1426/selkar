<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{

    public function run()
    {
        DB::table('materiales')->insert([
            'nombre' => 'canal3',
            'medida' => 'pulgadas',
            'tipomaterial' => 'Acabado',
            'descripcion' => 'Es grande',
            'estatus_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('materiales')->insert([
            'nombre' => 'canal3',
            'medida' => 'pulgadas',
            'tipomaterial' => 'Acabado',
            'descripcion' => 'Es grande',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('materiales')->insert([
            'nombre' => 'canal3',
            'medida' => 'pulgadas',
            'tipomaterial' => 'Acabado',
            'descripcion' => 'Es grande',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('materiales')->insert([
            'nombre' => 'canal3',
            'medida' => 'pulgadas',
            'tipomaterial' => 'Acabado',
            'descripcion' => 'Es grande',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('materiales')->insert([
            'nombre' => 'canal3',
            'medida' => 'pulgadas',
            'tipomaterial' => 'Acabado',
            'descripcion' => 'Es grande',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
