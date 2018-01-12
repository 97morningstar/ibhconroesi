@extends('layout.app')

@section('content')

  <h2>{{$album->name}}</h2>

<div class="container">
  <a class="btn btn-primary" href="/galeria">Volver</a>
  </div>

    @if(auth()->check())
        <div class="container">
        <a class="btn btn-primary" href="/photos/create/{{$album->id}}">Subir foto a album</a>
      </div>
    @endif

<hr>

  @if(count($album->photos) > 0)
    <?php
  	  $k = 0;
    ?>
    <div id="photos">
      <div class="container">
        @foreach($album->photos as $photo)

         @if($k % 3 === 0)
        	 <div class="row">
 		 @endif

      {{-- - 1 2 3 - 4 5 6 - 7 8 9 - --}}  

        	<div class='col-md-4 text-center img' >
               <a href="/photos/{{$photo->id}}">
                  <img  width="500px" height="500px" class="img-thumbnail" 
                  src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
               <br>
               <h4>{{$photo->title}}</h4>

                 @if(auth()->check())
                <form  style="display: inline;" method="POST" action="{{ route('photos.destroy', $photo->id )}}">
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
    <div class="container text-center">
       <p>Lo sentimos, este album no tiene fotos para mostrar</p>
    </div>
  @endif

@stop