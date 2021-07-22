<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesmaterialTable extends Migration
{

    public function up()
    {
        Schema::create('detallesmaterial', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cantidad');
            $table->foreignId('materiales_id')
                  ->references('id')
                  ->on('materiales');
            $table->foreignId('productos_id')
                  ->refrences('id')
                  ->on('productos');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('detallesmaterial');
    }
}
