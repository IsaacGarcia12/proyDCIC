<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use App\pregunta;

class PreguntasController extends Controller
{
    public function index(){
    }

    //Metodo GET
    public function create(){

        //return view('Cp/preg');
    }

    //METODO POST
    public function store(Request $request){
    }

    //Mostrar Cuestionario ya finalizado
    public function show($fol){
         
    }
}
