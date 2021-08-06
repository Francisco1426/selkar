<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{

    public function run()
    {
        DB::table('clientes')->insert([
            'razonsocial' => 'Sipro',
            'telefono' => '7291039802',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'representante' => 'Omar Chong Lopez',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'estatuscliente' => 'Prospecto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Absara',
            'telefono' => '7291039802',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'representante' => 'Norma Ranguel Aguilar',
            'celular' => '7282841804',
            'estatus_id' => 2,
            'tipocliente' => 'Particular',
            'estatuscliente' => 'Prospecto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Oscar Chong Lopez',
            'telefono' => '7291039802',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'representante' => 'Oscar Chong Lopez',
            'celular' => '7282841804',
            'estatus_id' => 2,
            'tipocliente' => 'Empresa',
            'estatuscliente' => 'Prospecto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Komatsu',
            'telefono' => '7222619290',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'representante' => 'Carlos Perez Suarez',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'estatuscliente' => 'Prospecto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Grupo Insustrial Miro',
            'telefono' => '72282841804',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'representante' => 'Marco Antonio Gonzalez',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'estatuscliente' => 'Prospecto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Bocar',
            'telefono' => '7291039802',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'representante' => 'Cristian Gonzalez Chong',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Cliente',
            'estatuscliente' => 'Prospecto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Utvt',
            'telefono' => '7291039802',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'representante' => 'Jose Perez Sanchez',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'estatuscliente' => 'Prospecto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Spring Air',
            'telefono' => '7291039802',
            'email' => 'spring@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'representante' => 'Nayeli Gonzales Hernandez',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'estatuscliente' => 'Cliente',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Barcel',
            'telefono' => '7291417611',
            'email' => 'ventas.barcel@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'representante' => 'Omar Chong Lopez',
            'celular' => '7282841804',
            'estatus_id' => 2,
            'tipocliente' => 'Empresa',
            'estatuscliente' => 'Prospecto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Lerka SA.DE.CV',
            'telefono' => '7291417611',
            'email' => 'lerka@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'representante' => 'Daniel Lopez Contreras',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'estatuscliente' => 'Cliente',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
