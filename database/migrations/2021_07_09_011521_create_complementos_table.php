<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplementosTable extends Migration
{

    public function up()
    {
        Schema::create('complementos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('materiales_id')
                    ->refrences('id')
                    ->on('materiales');
            $table->foreignId('detallesmaterial_id')
                    ->references('id')
                    ->on('detallesmaterial');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('complementos');
    }
}
