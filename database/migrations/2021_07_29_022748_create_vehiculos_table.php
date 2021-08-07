<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
   
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('marca');
            $table->date('fecha');
            $table->text('descripcion');
            $table->string('numeroserie');
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
        Schema::dropIfExists('vehiculos');
    }
}
