<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{

    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('razonsocial');
            $table->string('rfc');
            $table->string('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->string('colonia');
            $table->string('municipio');
            $table->string('cp');
            $table->string('representante');
            $table->string('celular');
            $table->foreignId('estatus_id')
                    ->references('id')
                    ->on('estatus');
            $table->string('tipocliente');
            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}