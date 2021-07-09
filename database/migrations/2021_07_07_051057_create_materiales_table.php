<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialesTable extends Migration
{

    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->string('medida');
            $table->string('tipomaterial');
            $table->text('descripcion');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('materiales');
    }
}
