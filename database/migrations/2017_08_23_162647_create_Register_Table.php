<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function(Blueprint $table){

            $table->increments('idUsuario');
            $table->string('nombre');
            $table->string('apPat');
            $table->string('apMat');
            $table->string('email')->unique;
            $table->string('password');
            $table->timestamps();

        });
    }

    public function down(){
        //
        Schema::drop('registro');

    }
}
