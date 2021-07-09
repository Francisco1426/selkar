<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduccionesTable extends Migration
{

    public function up()
    {
        Schema::create('producciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('porcentaje');
            $table->string('descripcion');
            $table->foreignId('ventas_id')
                    ->references('id')
                    ->on('ventas');
            $table->foreignId('fases_id')
                    ->references('id')
                    ->on('fases');
            $table->date('fecha_inicial');
            $table->date('fecha_final');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('producciones');
    }
}
