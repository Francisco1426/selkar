<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasesTable extends Migration
{

    public function up()
    {
        Schema::create('fases', function (Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->foreignId('estatus_id')
                    ->references('id')
                    ->on('estatus');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fases');
    }
}
