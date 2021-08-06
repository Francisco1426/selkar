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
            $table->string('imagen')->nullable();
            $table->foreignId('categorias_id')
                    ->references('id')
                    ->on('categorias');
            $table->foreignId('estatus_id')
                    ->references('id')
                    ->on('estatus');
            $table->integer('stock');
            $table->string('presentacion');
            $table->string('dimension');
            $table->float('preciodistribuidor');
            $table->float('preciocontado');
            $table->float('preciopublico');
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
