<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuestionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionario', function (Blueprint $table) {
            //$table->engine='InnoDB';
            //$table->increments('id_cuestionario');
            $table->integer('folio')->unsigned()->primary();
            $table->string('titulo');
            $table->string('autor');
            $table->string('detalle');
            $table->date('fecha_Publicacion');
            $table->date('fecha_Termino');
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
        Schema::drop('cuestionario');
    }
}


