 @extends('lay')

@section('content')
<br>
<br>
<br>
<h1>Cuestionarios Disponibles</h1>
<style type="text/css">
	#btn1{
		border-radius: 25px;
	}
</style>
<div>
	<ul>
	@foreach($folio as $folios)
		<li>
			{{ $folios->folio }}
			{{ $folios->titulo}}	
		</li>
	@endforeach
	</ul>
</div>

<form name="preguntas" method="GET" action="{{url('plataforma/respC')}}">
	<div>
		Ingrese el numero de folio: <input type="text" name="folio">
		<input type="submit" name="srh-btn">
	</div>
</form>

@endsection