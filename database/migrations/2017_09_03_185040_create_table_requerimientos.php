<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRequerimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_proyecto');
            $table->integer('id_parte_sistema');
            $table->integer('id_tipo_proyecto');
            $table->integer('id_empresa');
            $table->integer('id_usuario');
            $table->string('descripcion');
            $table->string('justificacion');
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
        Schema::dropIfExists('requerimientos');
    }
}
