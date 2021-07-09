<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(ClienteSeeder::class);
<<<<<<< HEAD
        $this->call(EstatusSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(FaseSeeder::class);
=======
        $this->call(ProcesoSeeder::class);
        $this->call(EstatusSeeder::class);
>>>>>>> Eduardo
        // \App\Models\User::factory(10)->create();
    }
}
