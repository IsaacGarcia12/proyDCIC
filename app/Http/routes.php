<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\User;
use App\pregunta;
use App\cuestionario;


Route::get('/', function () {
    return view('Cp/log');
});



//Ruta para la vista principal del sitio
Route::get('/plataforma/main', 'CuestionarioController@index');

//Creacion del Cuestionario y preguntas
Route::get('/plataforma/crearC',  'CuestionarioController@create');
Route::post('/plataforma/crearC', 'CuestionarioController@store');


//Vista del cuestionario
Route::get('/plataforma/verC',  'CuestionarioController@show');
Route::post('/plataforma/verC',  'CuestionarioController@search');


//Vista para poder contestar las preguntas
Route::get('/plataforma/respC',  'CuestionarioController@scopePregunta');
Route::post('/plataforma/respC', 'RespuestaController@store');

//Vista para ver cuestionarios contestados
Route::get('/plataforma/verRespondido', 'RespuestaController@scopeRespuesta');

//Rutas para el LogIn
Route::get('/plataforma/log', 'LogController@index');


//Rutas para el Registro de usuarios
Route::get('/plataforma/register', function(){
	return view('Cp/reg');
});
Route::post('/plataforma/register', 'RegController@store');
