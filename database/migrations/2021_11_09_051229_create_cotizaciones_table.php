<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesTable extends Migration
{

    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->foreignId('cliente_id')
                    ->references('id')
                    ->on('clientes');
            $table->foreignId('producto_id')
                    ->references('id')
                    ->on('productos');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cotizaciones');
    }
}
