@extends('layout.app')


@section('content')
			<h2>Galería</h2>
			<br>
			<h2 style="font-size: 40px;">Álbumes</h2>
			
				@if(auth()->check())
				<div class="container">
       		  			<a class="btn btn-primary" href="/albums/create">Create Album</a>
       		  			</div>
       		  	@endif
       		  	

			 @if(count($albums) > 0)
    <?php
  	  $k = 0;
    ?>
    <div id="albums">
      <div class="container text-center">
        @foreach($albums as $album)

         @if($k % 3 === 0)
        	 <div class="row">
 		 @endif

      {{-- - 1 2 3 - 4 5 6 - 7 8 9 - --}}  

        	<div class='col-md-4 text-center img'>
               <a href="/albums/{{$album->id}}">
                  <img height="300px" class="img-responsive" src="{{ Storage::url($album->cover_image) }}" alt="{{$album->name}}">
                </a>
               <br>
               <h4>{{$album->name}}</h4>
               

                @if(auth()->check())

  	<form  style="display: inline;" method="POST" action="{{ route('albums.destroy', $album->id )}}">
		{!! csrf_field() !!}
		{!! method_field('DELETE') !!}
		<button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
						
	</form>
                @endif

             </div>

      <?php $k++; ?>
         @if($k % 3 === 0)

				{{--<div class="text-center"><br></div>--}}
				</div>
         @endif

        	


        @endforeach
      </div>
    </div>
  @else
 	 <div class="row text-center">
    	<p>Lo sentimos, no tenemos albumes para mostrar</p>
    </div>
  @endif
@endsection



