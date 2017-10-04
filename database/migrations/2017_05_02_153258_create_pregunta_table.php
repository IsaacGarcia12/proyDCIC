<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('pregunta', function (Blueprint $table) {

            $table->engine='InnoDB';
            $table->increments('numero');
            $table->string('texto');
            $table->integer('respuesta');
            $table->boolean('rbool');
            $table->string('rtext');
            $table->integer('rnum');
            $table->integer('fol')->unsigned();
            //constraints
            $table->foreign('fol')
                  ->references('folio')->on('cuestionario')
                  ->onDelete('cascade');
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
        Schema::drop('pregunta');
    }
}
