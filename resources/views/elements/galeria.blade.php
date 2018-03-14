<style type="text/css">
.lcl_fade_oc.lcl_pre_show #lcl_overlay,
.lcl_fade_oc.lcl_pre_show #lcl_window,
.lcl_fade_oc.lcl_is_closing #lcl_overlay,
.lcl_fade_oc.lcl_is_closing #lcl_window {
  opacity: 0 !important;
}
.lcl_fade_oc.lcl_is_closing #lcl_overlay {
  -webkit-transition-delay: .15s !important; 
  transition-delay: .15s !important;
}
</style>



@extends('layout.app')


@section('content')
			<h2>Galería</h2>
	
			<h2 style="font-size: 20px;">Álbumes</h2>
			
				@if(auth()->check())
				<div class="container">
       		  			<a class="btn btn-primary" href="/albums/create">Crear Album</a>
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
               <a 
               href="{{ config('image.url.album').$album->cover_image }}" 
                class="elem alb" 
                title="{{ $album->name  }}" 
                data-lcl-txt="{{ $album->description }}" 
               
                id="{{ $album->id }}">
              

             {{-- {{ Storage::disk('google')->get($album->id) 
                 href="/albums/{{$album->id}}"

             --}}
                <img height="300px" class="img-responsive img-album" src="{{ config('image.url.album').$album->cover_image }}" alt="{{$album->name}}">
                </a>


                


             @foreach($album->photos as $photo)   
                 <a  
                href="{{ config('image.url.photos').$album->id}}/{{ $photo->photo }}"  class="pho" 
                src="{{ config('image.url.photos').$album->id }}/{{ $photo->photo }}"
                title="{{ $photo->title  }}" 
                data-lcl-txt="{{ $photo->description }}"
                album="{{ $album->id }}"> 
                </a>
             
              @endforeach
             
              

               <br>
               <h4>{{$album->name}}</h4>
               

                @if(auth()->check())

  	<form  style="display: inline;" method="POST" action="{{ route('albums.destroy', $album->id )}}">
		{!! csrf_field() !!}
		{!! method_field('DELETE') !!}
		<button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
    <a class="btn btn-info btn-sm" href="/albums/{{$album->id}}">Update</a>
						
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



