@extends('lay')

@section('content')
<br>
<br>
<br>
  <h2>Registrate Plx</h2>

  <form class="form-horizontal" method="POST">
   Nombre: <input type="text" name="name"><br>
   Apellido Paterno: <input type="text" name="ApPat"><br>
   Apellido Materno: <input type="text" name="ApMat"><br>
   email: <input type="text" name="email"><br>
   password: <input type="text" name="pwd"><br>
  
    {!! CSRF_field() !!}
    <input type="submit" name="enviar">
  </form>
@endsection