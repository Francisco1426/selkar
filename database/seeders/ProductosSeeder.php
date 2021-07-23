<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{

    public function run()
    {
        DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Volteos',
            'nombre' => 'Volteos de todas las medidas',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 1,
            'estatus_id' => 2,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Volteos',
            'nombre' => 'Volteos de todas las medidas',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 1,
            'estatus_id' => 2,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Volteos',
            'nombre' => 'Volteos de todas las medidas',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 2,
            'estatus_id' => 2,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Volteos',
            'nombre' => 'Volteos de todas las medidas',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 2,
            'estatus_id' => 2,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Volteos',
            'nombre' => 'Volteos de todas las medidas',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 4,
            'estatus_id' => 2,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
         DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Volteos',
            'nombre' => 'Volteos de todas las medidas',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 3,
            'estatus_id' => 1,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Volteos',
            'nombre' => 'Volteos de todas las medidas',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 1,
            'estatus_id' => 2,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Volteos',
            'nombre' => 'Volteos de todas las medidas',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 1,
            'estatus_id' => 2,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Volteos',
            'nombre' => 'Volteos de todas las medidas',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 1,
            'estatus_id' => 1,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Vol-21',
            'nombre' => 'Volteos de todas las medidas',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 1,
            'estatus_id' => 1,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('productos')->insert([
            'tipoproducto' => 'Producto comercial',
            'clave' => 'Pip-20',
            'nombre' => 'Pipa de 20,000 lts',
            'presentacion' => 'Pza',
            'stock' => '10',
            'precioinicial' => '55000',
            'imagen' => 'imagen',
            'categorias_id' => 3,
            'estatus_id' => 2,
            'descripcion' => 'Producto terminado',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
