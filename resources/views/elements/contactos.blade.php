@extends('layout.app')


@section('content')
<div class="container">
<div class="row">
			



{{--
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

	--}}


<div class="wrap-contact100">
			<div class="contact100-form-title" >
				<h2 id="cont">Contactos</h2>
			<p class="text-center lead">Estamos para servirte <br>No dudes en contactarnos</p>
			<p class="text-center ">
				<strong>Pastor:</strong> Isaias Martinez. <br>
				(281) 854-7133 <br>
				isaiasmj1966@gmail.com <br>
			</p>
			<p class="text-center ">
				<strong>Secretaria:</strong> Elisa Martinez.  <br>
				(281) 854-7796 <br>
				97morningstar@gmail.com
			</p>
			<p class="text-center ">
				<strong>Correo de la Iglesia: ibhconroe@gmail.com</strong>
			</p>
		
			</div>

			<form class="contact100-form" method='POST' action="{{ route('contacto.store') }}">
				 {!! csrf_field() !!}
				<div class="wrap-input100 text-center">
					<span class="label-input100">¿Cómo te llamas?</span>
					
					<input class="input100" type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Escribe tu nombre">
				</div>
					{!! $errors->first('nombre', '<span class="error">:message</span>') !!}

				<div class="wrap-input100">
					<span class="label-input100">Tu correo</span>
					<input class="input100" type="email" name="email" value="{{ old('email') }}" placeholder="Escribe tu dirección de correo electrónico">
				</div>
					{!! $errors->first('email', '<span class="error">:message</span>') !!}

				<div class="wrap-input100">
					<span class="label-input100">¿Podemos visitarte?</span>
					<input class="input100" type="text" name="direccion" value="{{ old('email') }}" 
					placeholder="Escribe tu dirección">
				</div>
					{!! $errors->first('direccion', '<span class="error">:message</span>') !!}

				<div class="wrap-input100">
					<span class="label-input100">Número de teléfono </span>
					<input class="input100" type="phone" name="telefono" value="{{ old('telefono') }}" placeholder="Entra aquí tu número de teléfono">
				</div>
					{!! $errors->first('telefono', '<span class="error">:message</span>') !!}


				<div class="wrap-input100">
					<span class="label-input100">¿Cómo podemos ayudarte?</span>
						<textarea class="input100" name="mensaje" id="mensaje" placeholder="Escríbenos un mensaje">{{ old('mensaje') }}</textarea>
				</div>
						{!! $errors->first('mensaje', '<span class="error">:message</span>') !!}


				<div class="container-contact100-form-btn">
					<input class="contact100-form-btn" type="submit" name="" value="Enviar">
				</div>
			</form>
		</div>












</div>
</div>
@endsection

