<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoRespTable extends Migration{

    public function up(){
        Schema::create('tipoRespuesta', function(Blueprint $table){
            $table->engine='InnoDB';
            $table->increments('idRespuesta');
            $table->string('rtexto');
            $table->boolean('rbool');
            $table->integer('rnum')->nullable();
            $table->integer('numero_pregunta')->unsigned();
            //Constraints
            $table->foreign('numero_pregunta')
                  ->references('numero')->on('pregunta')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::drop('tipoRespuesta');
    }
}
