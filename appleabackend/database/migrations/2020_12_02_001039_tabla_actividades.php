<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaActividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->longText('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->double('alto');
            $table->double('ancho');
            $table->double('largo');
            $table->bigInteger('unidad_medida')->unsigned();
            $table->foreign('unidad_medida')->references('id')->on('unidades_medida');
            $table->bigInteger('id_encargado')->unsigned();
            $table->foreign('id_encargado')->references('id')->on('empleados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
