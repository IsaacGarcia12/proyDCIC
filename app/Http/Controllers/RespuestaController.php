<?php

namespace App\Http\Controllers;

use App\pregunta;
use App\cuestionario;
use App\TipoRespuesta;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;


class RespuestaController extends Controller{

    public function index() {
    }

    public function create() {
    }

    public function store(Request $request){

      for($i=0; $i<count($request->rtexto); $i++){
        tipoRespuesta::create([
          "rtexto" => $request->rtexto[$i],
          //"rbool" => $request->rbool[$i],
          "rnum"  => $request->rnum[$i],
          "numero_pregunta"=>$request->numero,
        ]);
      }
      dd($request);
      return Redirect::to('/plataforma/main');
    }

    public function show($id){
    }

    public function edit($id) {
    }

    public function update(Request $request, $id){
    }

    public function destroy($id){
    }

    public function scopeRespuestas(Request $request){

    }
}
