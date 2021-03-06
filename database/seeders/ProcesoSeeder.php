<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcesoSeeder extends Seeder
{

    public function run()

    {
        DB::table('procesos')->insert([
            'nombre'=>'En produccion',
            'descripcion'=>'Este proceso esta apunto de empezar',
            'estatus_id' =>1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('procesos')->insert([
            'nombre'=>'Anulado',
            'descripcion'=>'Este proceso esta cancelado',
            'estatus_id' =>1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('procesos')->insert([
            'nombre'=>'Finalizado',
            'descripcion'=>'Este proceso esta terminado',
            'estatus_id' =>1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('procesos')->insert([
            'nombre'=>'Revision',
            'descripcion'=>'Este proceso se encuentra en revision',
            'estatus_id' =>2,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
