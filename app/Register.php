<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model{
	
	protected $table = 'registro';
	protected $primaryKey = 'idUsuario';
	protected $fillable = ['nombre', 'apPat', 'apMat', 'email', 'password']; 
}
