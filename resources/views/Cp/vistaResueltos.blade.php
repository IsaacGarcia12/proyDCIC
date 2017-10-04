@extends('lay')

@@section('content')
<br><br><br>
<h1>Respuestas de los cuestionarios</h1>
<form method="GET">

  @foreach($request as $respuestas)

    <li>
      {{ $respuestas->TipoRespuesta }}
    </li>

  @endforeach
</form>
@endsection
