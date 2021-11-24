<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(EstatuSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ProcesoSeeder::class);
        $this->call(ClienteSeeder::class);
<<<<<<< HEAD
        $this->call(FaseSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(CotizacionSeeder::class);
        $this->call(DetallecotizacionSeeder::class);

=======
        $this->call(MaterialSeeder::class);
        $this->call(ProductosSeeder::class);
        //$this->call(ProcesoSeeder::class);
        // $this->call(UsuarioSeeder::class);
>>>>>>> Francisco

        // \App\Models\User::factory(10)->create();
    }
}
