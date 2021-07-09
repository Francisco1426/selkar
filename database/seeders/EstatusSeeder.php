<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('estatus')->insert([
            'nombre'=>'Activo',
            'descripcion'=>'Este estatus estara activo siempre',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('estatus')->insert([
            'nombre'=>'Inactivo',
            'descripcion'=>'Este estatus estara inactivo',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('estatus')->insert([
            'nombre'=>'Cancelado',
            'descripcion'=>'Este estatus estara cancelado',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
