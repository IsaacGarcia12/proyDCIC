<?php

namespace App\Http\Controllers;

use Auth;
use App\pregunta;
use App\cuestionario;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Database\Eloquent\Model;
use App\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;



class CuestionarioController extends Controller{

   public function index(){
        return view('Cp/Cuestionarioindex');
    }

    public function create(){
        return view('Cp/preg');
    }

    public function store(Request $request){    
        cuestionario::create([
            "titulo"     => $request->titulo,
            "autor"      => $request->autor,
            "detalle"    => $request->detalle,
            "folio"      => $request->folio,]);

        for ($i=0; $i < count($request->texto); $i++){ 
            pregunta::create([       
             //"cuestionario_id"=>$value,
              "fol"   => $request->folio,
              "texto" => $request->texto[$i],
              "respuesta" => $request->respuesta[$i],
            ]);
            # code...
        }
        /*//$c= sizeof(Cuestionario::all());
        //$request->session()->put('indice', $c[sizeof(Cuestionario::all())]->id_cuestionario);
        //return Redirect::to('plataforma/crearPreguntas');*/
        return Redirect::to('plataforma/main');
    }

    public function show(Request $folio){
        $folio = cuestionario::get();
        //dd($folio);
        return view('Cp/cuesFinal', compact('folio'));
        //return view('Cp/cont', compact('quest'));
    }

    public function scopePregunta(Request $request){
        //dd($request->get('folio'));
        $request=DB::table('pregunta')
                ->select('pregunta.texto AS Pregunta', 'pregunta.respuesta AS TipoRespuesta')
                ->join('cuestionario','pregunta.fol','=','folio')
                ->get();
            return view('Cp/respC', compact('request'));
            //return view('Cp/respC', dd($request));
    }

}
