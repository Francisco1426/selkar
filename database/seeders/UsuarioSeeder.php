<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Selkar',
            'email'=>'al221810633@gmail.com',
            'password'=>'selkar12345',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name'=>'Selkar',
            'email'=>'al221811717@gmail.com',
            'password'=>'selkar12345',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
