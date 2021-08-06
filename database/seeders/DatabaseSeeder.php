<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
<<<<<<< HEAD
        $this->call(EstatusSeeder::class);
=======
        $this->call(EstatuSeeder::class);
>>>>>>> 5a74de8ba5d0590c545e745e7372bef8d30dccfc
        $this->call(CategoriasSeeder::class);
        $this->call(ClienteSeeder::class);
        //$this->call(MaterialSeeder::class);
        $this->call(ProductosSeeder::class);
<<<<<<< HEAD

=======
>>>>>>> 5a74de8ba5d0590c545e745e7372bef8d30dccfc
        //$this->call(ProcesoSeeder::class);

        //$this->call(MaterialSeeder::class);
        //$this->call(FaseSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
