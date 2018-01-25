<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Album;


class AlbumsController extends Controller
{
      function __construct(){
        $this->middleware('auth' , ['only' => ['create', 'destroy', 'store',]]);
      }



	  public function index(){
    	$albums = Album::with('Photos')->get();  //buscar esta parte que no la entendi, viene de la relacion entre las 2 bases de datos, devuelve un arreglo con los albumes en la base de datos
      return view('elements.galeria')->with('albums', $albums);
    }

    public function create(){
    	return view('albums.create');
    }

    public function store(Request $request){

    	//I didn't know that you could place a validation here as well, nice
    	$this->validate($request, [
    		'name' => 'required',
    		'cover_image' => 'required|image|max:1999'
    	]);

    	  // Get filename with extension
      $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
//dd($filenameWithExt);
      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Get extension
      $extension = $request->file('cover_image')->getClientOriginalExtension();

      // Create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;

      // Uplaod image
      $path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);

    //  dd($path);
//Investigar el path file con laravel 

        // Create album
      $album = new Album;
      $album->name = $request->input('name');
      $album->description = $request->input('description');
      $album->cover_image = $filenameToStore;

      $album->save();

      return redirect('/galeria')->with('success', 'Album Created');
    }

    public function show($id){

      
      $album = Album::with('Photos')->findOrFail($id);
     // dd($id);
      return view('albums.show', compact('album'));

    //  return view('albums.show')->with('album', $album);
    }



      public function destroy($id){
      $album = Album::findOrFail($id);
      $albums = Album::with('Photos')->find($id);
      $photo = Album::findOrFail($id);

//dd($photo->photos);

      /*  foreach ($photo->photos as $d) {
           echo $d->title;
           echo '<br>';
        }*/


  
      Storage::delete('/storage/album_covers/'.$album->cover_image);
       // dd($album);
      foreach ($album->photos as $d) {
       
       Storage::delete('/storage/photos/'.$id.'/'.$d->photo);

        $d->delete();
        }
      

       $album->delete();
   return redirect('/galeria')->with('success', 'Album Deleted');
      


    }

}
