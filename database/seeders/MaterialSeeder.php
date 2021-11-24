<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{

    public function run()
    {
        DB::table('materiales')->insert([
<<<<<<< HEAD
            'clave' => 'LAM-03',
            'nombre' => 'Lamina galvanizada',
            'medida' => 'Mts',
            'tipomaterial' => 'Acabado',
            'existente' => '2000',
            'descripcion' => 'Laminas',
            'estatus_id' => '2',
=======
            'clave' => 'CAL',
            'nombre' => 'canal3',
            'medida' => 'pulgadas',
            'tipomaterial' => 'Acabado',
            'existente' => 23,
            'descripcion' => 'Es grande',
            'estatus_id' => 1,
>>>>>>> Francisco
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('materiales')->insert([
<<<<<<< HEAD
            'clave' => 'SEL-12',
            'nombre' => 'Sellador para conexiones',
            'medida' => 'Lts',
            'tipomaterial' => 'Estructural',
            'existente' => '10',
            'descripcion' => 'Selladores',
            'estatus_id' => '1',
=======
            'clave' => 'CAL',
            'nombre' => 'canal3',
            'medida' => 'pulgadas',
            'tipomaterial' => 'Acabado',
            'existente' => 23,
            'descripcion' => 'Es grande',
            'estatus_id' => 1,
>>>>>>> Francisco
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('materiales')->insert([
<<<<<<< HEAD
            'clave' => 'TAQ-1',
            'nombre' => 'Taquetes expansicos',
            'medida' => '"',
            'tipomaterial' => 'Estructural',
            'existente' => '1',
            'descripcion' => 'Laminas',
            'estatus_id' => '1',
=======
            'clave' => 'CAL',
            'nombre' => 'canal3',
            'medida' => 'pulgadas',
            'tipomaterial' => 'Acabado',
            'existente' => 23,
            'descripcion' => 'Es grande',
            'estatus_id' => 1,
>>>>>>> Francisco
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('materiales')->insert([
<<<<<<< HEAD
            'clave' => 'TUE-10',
            'nombre' => '	Tuercas de seguridad',
            'medida' => '"',
            'tipomaterial' => 'Acabado',
            'existente' => '50 ',
            'descripcion' => 'Tuercas de ensamble',
            'estatus_id' => '2',
=======
            'clave' => 'CAL',
            'nombre' => 'canal3',
            'medida' => 'pulgadas',
            'tipomaterial' => 'Acabado',
            'existente' => 23,
            'descripcion' => 'Es grande',
            'estatus_id' => 1,
>>>>>>> Francisco
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('materiales')->insert([
<<<<<<< HEAD
            'clave' => 'TUB-10',
            'nombre' => 'Tubo mecanico',
            'medida' => 'Mts',
            'tipomaterial' => 'Acabado',
            'existente' => '70',
            'descripcion' => 'Tubos para ensamble',
            'estatus_id' => '1',
=======
            'clave' => 'CAL',
            'nombre' => 'canal3',
            'medida' => 'pulgadas',
            'tipomaterial' => 'Acabado',
            'existente' => 23,
            'descripcion' => 'Es grande',
            'estatus_id' => 1,
>>>>>>> Francisco
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
