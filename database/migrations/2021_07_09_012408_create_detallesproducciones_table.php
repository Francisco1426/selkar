<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesproduccionesTable extends Migration
{

    public function up()
    {
        Schema::create('detallesproducciones', function (Blueprint $table) {
            $table->id();
            $table->text('materialadicional');
            $table->text('razones');
            $table->foreignId('producciones_id')
                    ->refrences('id')
                    ->on('producciones');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('detallesproducciones');
    }
}
