@extends('layout.app')


@section('content')
<h2>Subir Foto al álbum</h2>

<div class="container">
<form class="text-center" method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data">
	 {!! csrf_field() !!}

		<div class="form-group text-center">
			<input class="form-control" type="title" name="title" placeholder="Nombre de la foto" value="{{ old('title') }}" />
			{!! $errors->first('title', '<span class="error">:message</span>') !!}
			<br>
			<input class="form-control" type="description" name="description" placeholder="Descripción pequeña de la foto" value="{{ old('description') }}" />
			{!! $errors->first('description', '<span class="error">:message</span>') !!}
			<br>
			<input type="hidden" name="album_id" value={{ $album_id }} />
		
    			 <input type="file"  name="photo" />
				
			{!! $errors->first('photo', '<span class="error">:message</span>') !!}
			
			<input class="btn btn-primary" type="submit" value="Subir" />
		</div>

	</form>
</div>

	
@endsection