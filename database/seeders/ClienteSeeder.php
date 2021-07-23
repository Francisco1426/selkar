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
            'rfc' => 'colo991030',
            'telefono' => '7291039802',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'colonia' => 'Juarez',
            'municipio' => 'Ocoyoacac',
            'cp' => '52743',
            'representante' => 'Omar Chong Lopez',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Absara',
            'rfc' => 'colo991030',
            'telefono' => '7291039802',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'colonia' => 'Juarez',
            'municipio' => 'Ocoyoacac',
            'cp' => '52743',
            'representante' => 'Norma Ranguel Aguilar',
            'celular' => '7282841804',
            'estatus_id' => 2,
            'tipocliente' => 'Particular',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Oscar Chong Lopez',
            'rfc' => 'colo991030',
            'telefono' => '7291039802',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'colonia' => 'Juarez',
            'municipio' => 'Ocoyoacac',
            'cp' => '52743',
            'representante' => 'Oscar Chong Lopez',
            'celular' => '7282841804',
            'estatus_id' => 2,
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Komatsu',
            'rfc' => 'colo991030',
            'telefono' => '7222619290',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'colonia' => 'Juarez',
            'municipio' => 'Ocoyoacac',
            'cp' => '52743',
            'representante' => 'Carlos Perez Suarez',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Grupo Insustrial Miro',
            'rfc' => 'Miro36585d',
            'telefono' => '72282841804',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'colonia' => 'Juarez',
            'municipio' => 'Ocoyoacac',
            'cp' => '52743',
            'representante' => 'Marco Antonio Gonzalez',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Bocar',
            'rfc' => 'colo991030',
            'telefono' => '7291039802',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'colonia' => 'Juarez',
            'municipio' => 'Ocoyoacac',
            'cp' => '52743',
            'representante' => 'Cristian Gonzalez Chong',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Utvt',
            'rfc' => 'colo991030',
            'telefono' => '7291039802',
            'email' => 'al221811717@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'colonia' => 'Juarez',
            'municipio' => 'Ocoyoacac',
            'cp' => '52743',
            'representante' => 'Jose Perez Sanchez',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Spring Air',
            'rfc' => 'colo991030',
            'telefono' => '7291039802',
            'email' => 'spring@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'colonia' => 'Juarez',
            'municipio' => 'Ocoyoacac',
            'cp' => '52743',
            'representante' => 'Nayeli Gonzales Hernandez',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Barcel',
            'rfc' => 'colo991030',
            'telefono' => '7291039802',
            'email' => 'ventas.barcel@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'colonia' => 'Juarez',
            'municipio' => 'Metepec',
            'cp' => '52743',
            'representante' => 'Omar Chong Lopez',
            'celular' => '7282841804',
            'estatus_id' => 2,
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('clientes')->insert([
            'razonsocial' => 'Lerka SA.DE.CV',
            'rfc' => 'Lerka552545bg',
            'telefono' => '7291417611',
            'email' => 'lerka@gmail.com',
            'direccion' => 'Calle benito Juarez #1',
            'colonia' => 'Juarez',
            'municipio' => 'Toluca',
            'cp' => '52743',
            'representante' => 'Daniel Lopez Contreras',
            'celular' => '7282841804',
            'estatus_id' => 1,
            'tipocliente' => 'Empresa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
