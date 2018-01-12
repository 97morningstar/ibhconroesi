@extends('layout.app')


@section('content')
<h2>Crear Album</h2>

<div class="container">
	<form class="text-center" method="POST" action="{{ route('albums.store') }}" enctype="multipart/form-data">
	 {!! csrf_field() !!}

		<div class="form-group text-center">
			<input class="form-control" type="name" name="name" placeholder="Nombre del Album" value="{{ old('name') }}">
			{!! $errors->first('name', '<span class="error">:message</span>') !!}
			<br>
			<input class="form-control" type="description" name="description" placeholder="Descripción pequeña del album" value="{{ old('description') }}" />
			{!! $errors->first('description', '<span class="error">:message</span>') !!}
			<br>
		
    			 <input type="file"  name="cover_image" />
				
			{!! $errors->first('cover_image', '<span class="error">:message</span>') !!}
			
			<input class="btn btn-primary" type="submit" value="Entrar">
		</div>

	</form>
	</div>
@endsection