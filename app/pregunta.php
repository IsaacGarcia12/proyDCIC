<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model{
	protected $table = 'pregunta';
	protected $fillable = ['texto', 'respuesta','fol'];

	public function cuestionario(){
	return $this->hasOne('App\cuestionario'); //Relacion 1 a 1
	}

	public function TipoRespuesta(){
		return $this->hasMany('App\TipoRespuesta');
	}
}
