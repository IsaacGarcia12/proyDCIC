<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuestionario extends Model{

	protected $table = 'cuestionario';
	protected $primaryKey = 'folio';
	protected $fillable = ['titulo','autor','detalle', 'folio'];

	public function pregunta(){
		return $this->belongsToMany('App\pregunta');
	}

}
