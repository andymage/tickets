<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRequerimientosPlanNegocio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerimientos_plan_negocio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_requerimiento');
            $table->string('descripcion');
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_actualizacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requerimientos_plan_negocio');
    }
}
