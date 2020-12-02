<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaEmpleadosActividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_actividades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_actividad')->unsigned();
            $table->foreign('id_actividad')->references('id')->on('actividades');
            $table->bigInteger('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
