<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{

    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Omar',
            'app' => 'Chong',
            'apm' => 'Lopez',
            'email' => 'al221811717@gmail.com',
            'telefono' => '7291039802',
            'rfc' => 'COLO991030',
            'tipocliente' => 'Particular',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Francisco',
            'app' => 'Rangel',
            'apm' => 'Perez',
            'email' => 'al221811717@gmail.com',
            'telefono' => '7291039802',
            'rfc' => 'COLO991030',
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Eduardo',
            'app' => 'Garcia',
            'apm' => 'Turin',
            'email' => 'al221811717@gmail.com',
            'telefono' => '7291039802',
            'rfc' => 'COLO991030',
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Luis Fernando',
            'app' => 'Diaz',
            'apm' => 'Ramos',
            'email' => 'al221811717@gmail.com',
            'telefono' => '7291039802',
            'rfc' => 'COLO991030',
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Gabriel',
            'app' => 'Martinez',
            'apm' => 'Jimenez',
            'email' => 'al221811717@gmail.com',
            'telefono' => '7291039802',
            'rfc' => 'COLO991030',
            'tipocliente' => 'Particular',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Karla',
            'app' => 'Arellano',
            'apm' => 'Hernandez',
            'email' => 'al221811717@gmail.com',
            'telefono' => '7291039802',
            'rfc' => 'COLO991030',
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Nayeli',
            'app' => 'Hernandez',
            'apm' => 'Juarez',
            'email' => 'al221811717@gmail.com',
            'telefono' => '7291039802',
            'rfc' => 'COLO991030',
            'tipocliente' => 'Particular',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Yessenia',
            'app' => 'Rubio',
            'apm' => 'Gonzalez',
            'email' => 'al221811717@gmail.com',
            'telefono' => '7291039802',
            'rfc' => 'COLO991030',
            'tipocliente' => 'Particular',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Enrique',
            'app' => 'Martinez',
            'apm' => 'Lopez',
            'email' => 'al221811717@gmail.com',
            'telefono' => '7291039802',
            'rfc' => 'COLO991030',
            'tipocliente' => 'Particular',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Daniela',
            'app' => 'Perez',
            'apm' => 'Lopez',
            'email' => 'al221811717@gmail.com',
            'telefono' => '7291039802',
            'rfc' => 'COLO991030',
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
