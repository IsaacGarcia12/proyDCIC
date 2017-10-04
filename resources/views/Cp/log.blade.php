@extends('lay')

@section('content')
<br>
<br>
<br>
<h1>Inicia Sesion Plx UwUr</h1>
<form method="GET" action="{{ url('plataforma/main') }}">
  <div>
        Correo:<input type="text" name="email"><br>
        Password:<input type="text" name="pwd">
  </div>
  <input type="submit" value="Iniciar">
</form>
@endsection
