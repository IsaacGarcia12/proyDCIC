@extends('lay')

@section('content')
<br><br><br>
<h1> Preguntas del cuestionario </h1>
<form method="POST">
<div class="container">
	@foreach($request as $pregs)
		<li>
			{{ $pregs->Pregunta }}
			@if($pregs->TipoRespuesta==0)
				<br>F<input type="radio" name="false" value="0"> V<input type="radio" name="true" value="1">
			@elseif($pregs->TipoRespuesta == 1)
				<br>Respuesta<input type="text" name="rtexto[]">
			@elseif($pregs->TipoRespuesta == 2)
					<br>Respuestas<select name="rnum[]"><option value="0">Avion</option><option value="1">Coche</option><option value="2">Tren</option></select>
			@endif
		</li>
	@endforeach
</div>
{!! CSRF_field() !!}
{!! Form::submit('Enviar') !!}
</form>
@endsection
