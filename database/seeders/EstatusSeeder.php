<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusSeeder extends Seeder
{
<<<<<<< HEAD
    
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
=======

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
>>>>>>> c4bf0f29ede1f310a87ff41e9fcc7718d38cf412
        ]);
    }
}
