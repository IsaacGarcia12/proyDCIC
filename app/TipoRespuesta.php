<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRespuesta extends Model{
    //
    protected $table = 'tipoRespuesta';
    protected $fillable = ['rtexto', 'rbool', 'rnum','numero_pregunta'];

    public function pregunta(){
      return $this->belongsTo('App\pregunta', 'numero');
    }

}
