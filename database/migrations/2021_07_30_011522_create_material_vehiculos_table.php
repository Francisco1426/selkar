<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cantidad');
            $table->text('observaciones');
            $table->date('fecha');
            $table->foreignId('fase_id')
                ->references('id')
                ->on('fases');

            $table->foreignId('material_id')
                ->references('id')
                ->on('materiales');

            $table->foreignId('vehiculo_id')
                ->references('id')
                ->on('vehiculos');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_vehiculos');
    }
}
