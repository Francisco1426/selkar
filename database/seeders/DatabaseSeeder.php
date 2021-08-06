<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        $this->call(EstatuSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ProductosSeeder::class);
        //$this->call(EstatusSeeder::class);
        //$this->call(ProcesoSeeder::class);
        //$this->call(MaterialSeeder::class);
        //$this->call(MaterialSeeder::class);
        //$this->call(FaseSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
