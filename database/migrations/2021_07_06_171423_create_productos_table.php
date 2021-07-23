<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{

    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('clave');
            $table->string('nombre');
            $table->string('imagen');
            $table->foreignId('categorias_id')
                    ->references('id')
                    ->on('categorias');
            $table->foreignId('estatus_id')
                    ->references('id')
                    ->on('estatus');
            $table->string('stock');
            $table->string('presentacion');
            $table->float('precioinicial');
            $table->string('descripcion');
            $table->string('tipoproducto');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
