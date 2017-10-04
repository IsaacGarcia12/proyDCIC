@extends('lay')

@section('content')
<br>
<br>
<br>
<div>
	<h1>Bienvenido</h1>
	<form>
		<table>
			<tr><td><a href="{{ url('plataforma/crearC') }}">Crear Cuestionario</td></tr>
			<tr><td><a href="{{ url('plataforma/verC') }}">Contestar Cuestionario</td></tr>
			<tr><td><a href="{{ url('plataforma/editarC') }}">Editar Cuestionario</td></tr>
		</table>
	</form>
</div>
@endsection