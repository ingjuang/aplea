<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 150);
            $table->longText('apellidos', 150);
            $table->string('num_iden');
            $table->bigInteger('tipo_iden');
            $table->date('fecha_nac');
            $table->bigInteger('tipo_empleado')->unsigned();
            $table->foreign('tipo_empleado')->references('id')->on('tipos_empleados');
            $table->string('correo', 150);
            $table->string('telefono', 50);
            $table->longText('fotoPerfil');
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
        Schema::dropIfExists('empleados');
    }
}
