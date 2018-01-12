@extends('layout.app')


@section('content')
<div class="container">
<div class="row">
			<h2 id="cont">Contactos</h2>
			<p class="text-center lead">Si tienes alguna pregunta o motivo de oración no dudes en contactarnos</p>
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


		<label for="nombre">Nombre</label>
		<input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}">
		{!! $errors->first('nombre', '<span class="error">:message</span>') !!}
		<br>
		<br>

		<label for="correo">Correo</label>
		<input class="form-control" type="email" name="email" value="{{ old('email') }}">
		{!! $errors->first('email', '<span class="error">:message</span>') !!}
		<br>
		<br>

		<label for="direccion">Dirección</label>
		<input class="form-control" type="text" name="direccion" value="{{ old('direccion') }}">
		{!! $errors->first('direccion', '<span class="error">:message</span>') !!}
		<br>
		<br>

		<label for="telefono">Teléfono</label>
		<input class="form-control" type="phone" name="telefono" value="{{ old('telefono') }}">
		{!! $errors->first('telefono', '<span class="error">:message</span>') !!}
		<br>
		<br>

		<label for="mensaje">Mensaje</label>
		<textarea class="form-control" name="mensaje" id="mensaje">{{ old('mensaje') }}</textarea>
		{!! $errors->first('mensaje', '<span class="error">:message</span>') !!}

		<br>
		<br>

		<input class="btn btn-primary" type="submit" name="" value="Enviar">

	</form>
</div>
</div>
@endsection

