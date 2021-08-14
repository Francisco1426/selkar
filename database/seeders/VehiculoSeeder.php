<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{

    public function run()
    {
        DB::table('vehiculos')->insert([
            'nombre' => 'International',
            'marca' => 'Ford',
            'fecha' => '2021-08-21',
            'descripcion' => 'Camion nuevo, sin placas',
            'numeroserie' => '221811717301099',
            'cliente_id' => '1',
            'producto_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('vehiculos')->insert([
            'nombre' => 'Camion',
            'marca' => 'Nissan',
            'fecha' => '2021-08-21',
            'descripcion' => 'Con rayones en los costados',
            'numeroserie' => '1909199720',
            'cliente_id' => '2',
            'producto_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('vehiculos')->insert([
            'nombre' => 'Camioneta de 2 toneladas',
            'marca' => 'Mercedes',
            'fecha' => '2021-08-21',
            'descripcion' => 'N/a',
            'numeroserie' => '13101522200101',
            'cliente_id' => '2',
            'producto_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('vehiculos')->insert([
            'nombre' => 'Plataforma camion',
            'marca' => 'Ram',
            'fecha' => '2021-08-21',
            'descripcion' => 'Camion nuevo, sin placas',
            'numeroserie' => '13082139742',
            'cliente_id' => '2',
            'producto_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('vehiculos')->insert([
            'nombre' => 'Camion de basura',
            'marca' => 'Nissan',
            'fecha' => '2021-08-21',
            'descripcion' => 'Camion con detalles',
            'numeroserie' => '221811717301099',
            'cliente_id' => '2',
            'producto_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
