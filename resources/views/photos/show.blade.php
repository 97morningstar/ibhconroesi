@extends('layout.app')

@section('content')

<div class="container">
	<h2>{{$photo->title}}</h2>
	<p>{{$photo->description}}</p>
	<a class="btn btn-primary" href="/albums/{{$photo->album_id}}">Volver</a>
	<hr>

	<img width="500px"
	src="{{ config('image.url.photos').$photo->album_id }}/{{ $photo->photo }}" alt="{{$photo->title}}">
	<hr>
</div>
@stop