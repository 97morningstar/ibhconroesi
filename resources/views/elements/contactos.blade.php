@extends('layout.app')


@section('content')
<div class="container">
<div class="row">
			<h2 id="cont">Contactos</h2>
			<p class="text-center lead">Estamos para servirte <br>No dudes en contactarnos</p>
			<p class="text-center ">
				<strong>Pastor:</strong> Isaias Martinez.
				(281) 854-7133
				isaiasmj1966@gmail.com
			</p>
			<p class="text-center ">
				<strong>Secretaria:</strong> Elisa Martinez. 
				(281) 854-7796
				97morningstar@gmail.com
			</p>
			<p class="text-center ">
				<strong>Correo de la Iglesia: ibhconroe@gmail.com</strong>
			</p>
			<br>
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

		<label for="mensaje">¿Cómo podemos ayudarte? Escríbenos un mensaje</label>
		<textarea class="form-control" name="mensaje" id="mensaje">{{ old('mensaje') }}</textarea>
		{!! $errors->first('mensaje', '<span class="error">:message</span>') !!}

		<br>
		<br>

		<input class="btn btn-primary" type="submit" name="" value="Enviar">

	</form>
</div>
</div>
@endsection

