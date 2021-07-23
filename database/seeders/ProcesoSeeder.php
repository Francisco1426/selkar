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
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 

        DB::table('procesos')->insert([
            'nombre'=>'Anulado',
            'descripcion'=>'Este proceso esta cancelado',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 

        DB::table('procesos')->insert([
            'nombre'=>'Finalizado',
            'descripcion'=>'Este proceso esta terminado',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 

        DB::table('procesos')->insert([
            'nombre'=>'Revision',
            'descripcion'=>'Este proceso se encuentra en revision',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]); 
    }
}
