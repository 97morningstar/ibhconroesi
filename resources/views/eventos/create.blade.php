@extends('layout.app')


@section('content')

<h2>Crear Evento</h2>

<div class="container">
	<form class="text-center contact100-form method="POST" action="{{ route('eventos.store') }}" enctype="multipart/form-data">
	 {!! csrf_field() !!}

	<div class="wrap-input100 text-center">
		<span class="label-input100">Evento</span>
			<input class="input100" type="name" name="name" placeholder="Nombre del Evento" value="{{ old('name') }}">
	</div>
			{!! $errors->first('name', '<span class="error">:message</span>') !!}
			<br>

	<div class="wrap-input100 text-center">
		<span class="label-input100">Donde?</span>
			<input class="input100" type="place" name="place" placeholder="Lugar" value="{{ old('place') }}" />
	</div>
			{!! $errors->first('place', '<span class="error">:message</span>') !!}
			<br>

	<div class="wrap-input100 text-center">
		<span class="label-input100">Cuando?</span>
			<input class="input100" type="date" name="date" placeholder="Fecha" value="{{ old('date') }}" />

	</div>
			{!! $errors->first('date', '<span class="error">:message</span>') !!}
			<br>

	<div class="wrap-input100 text-center">
		<span class="label-input100">Descripción</span>
			<textarea class="input100" name="description" id="description" placeholder="Descripción del evento">{{ old('description') }}</textarea>
	</div>
			{!! $errors->first('description', '<span class="error">:message</span>') !!}
			<br>

	<div class="wrap-input100 text-center">
		<span class="label-input100">Notas y horarios</span>
			<textarea class="input100" name="notes" id="notes" placeholder="Notas y Horarios">{{ old('mensaje') }}</textarea>
	</div>
			{!! $errors->first('notes', '<span class="error">:message</span>') !!}
			<br><br>

	<div class="wrap-input100 text-center">
    		<input type="file" id="image" name="cover_image" placeholder="Imagen" />
	</div>
			{!! $errors->first('cover_image', '<span class="error">:message</span>') !!}


		<div class="container-contact100-form-btn">
					<input class="contact100-form-btn" type="submit" name="" value="Entrar">
				</div>
		</div>

	</form>
	</div>

@endsection