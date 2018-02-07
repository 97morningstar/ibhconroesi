@extends('layout.app')


@section('content')
<div class="container">
<div class="row">
			<h2 id="cont">Pedir oración</h2>
			<p class="text-center lead"><i>"Otra vez os digo, que si dos de vosotros se pusieren de acuerdo en la tierra acerca de cualquiera cosa que pidieren, les será hecho por mi Padre que está en los cielos."<br> Mateo 18:19</i></p>
			<hr>

			<form method='POST' action="{{ route('contacto.store') }}">
	 {!! csrf_field() !!}


		<label for="nombre">¿Cómo te llamas?</label>
		<input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}">
		{!! $errors->first('nombre', '<span class="error">:message</span>') !!}
		<br>
		<br>

		<label for="correo">Tu correo</label>
		<input class="form-control" type="email" name="email" value="{{ old('email') }}">
		{!! $errors->first('email', '<span class="error">:message</span>') !!}
		<br>
		<br>

		<label for="direccion">¿Podemos visitarte? Pon aquí tu dirección</label>
		<input class="form-control" type="text" name="direccion" value="{{ old('direccion') }}">
		{!! $errors->first('direccion', '<span class="error">:message</span>') !!}
		<br>
		<br>

		<label for="telefono">Número de teléfono</label>
		<input class="form-control" type="phone" name="telefono" value="{{ old('telefono') }}">
		{!! $errors->first('telefono', '<span class="error">:message</span>') !!}
		<br>
		<br>

		<label for="mensaje">¿Por qué petición deseas que oremos? Escríbenos</label>
		<textarea class="form-control" name="mensaje" id="mensaje">{{ old('mensaje') }}</textarea>
		{!! $errors->first('mensaje', '<span class="error">:message</span>') !!}

		<br>
		<br>

		<input class="btn btn-primary" type="submit" name="" value="Enviar">

	</form>
</div>
</div>
@endsection

