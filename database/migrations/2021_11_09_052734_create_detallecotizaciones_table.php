<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallecotizacionesTable extends Migration
{

    public function up()
    {
        Schema::create('detallecotizaciones', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad');
            $table->date('fecha');
            $table->double('precio_unitario');
            $table->string('descripcion');
            $table->string('descuento');
            $table->double('precio_total');
            $table->string('vigencia');
            $table->string('tiempo_estimado');
            $table->foreignId('cotizacion_id')
                    ->references('id')
                    ->on('cotizaciones');
            $table->foreignId('producto_id')
            ->references('id')
            ->on('productos');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('detallecotizaciones');
    }
}
