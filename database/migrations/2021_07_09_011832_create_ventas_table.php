<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{

    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('refrencia');
            $table->foreignId('clientes_id')
                    ->refrences('id')
                    ->on('clientes');
            $table->foreignId('productos_id')
                  ->references('id')
                  ->on('productos');
            $table->date('fecha_inicial');
            $table->date('fecha_final');
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
