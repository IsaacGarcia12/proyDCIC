<?php

namespace App\Http\Controllers;

use App\Register;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RegController extends Controller
{
    public function index(){
    }

    public function create(){
        return view('Cp/reg');
    }


    public function store(Request $request){    
    
        //dd($request);
        Register::create([
            "name"  => $request->Nombre,
            "ApPat" => $request->ApPaterno,
            "ApMat" => $request->ApMaterno,
            "email" => $request->email,
            "pwd"   => $request->password,]);

        //dd($request);
        return Redirect::to('plataforma/log');

    }

    public function show($id){
        //
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
