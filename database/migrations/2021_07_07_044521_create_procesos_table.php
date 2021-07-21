<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesosTable extends Migration
{
    
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('estatus_id')
                  ->refrences('id')
                  ->on('estatus');
        });
    }

    public function down()
    {
        Schema::dropIfExists('procesos');
    }
}
