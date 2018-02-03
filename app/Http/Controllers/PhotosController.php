<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class PhotosController extends Controller
{
     function __construct(){
            $this->middleware('auth' , ['only' => ['create', 'destroy', 'store',]]);
        }



    public function create($album_id){
		return view('photos.create')->with('album_id', $album_id);    	
    }

     public function store(Request $request){
     //	dd($request->all());
		//I didn't know that you could place a validation here as well, nice
    	$this->validate($request, [
    		'title' => 'required',
    		'photo' => 'required|image|max:1999'
    	]);

    	  // Get filename with extension
      $filenameWithExt = $request->file('photo')->getClientOriginalName();

      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Get extension
      $extension = $request->file('photo')->getClientOriginalExtension();

      // Create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;

      // Uplaod image
     // $path= $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'), $filenameToStore);
      $path = $request->file('photo')->storeAs('storage/photos/'.$request->input('album_id'), $filenameToStore, 's3');

        // Create photo
      $photo = new Photo;
      $photo->album_id = $request->input('album_id');
      $photo->title = $request->input('title');
      $photo->description = $request->input('description');
      $photo->size = $request->file('photo')->getClientSize();
      $photo->photo = $filenameToStore;

      $photo->save();

      return redirect('/albums/'.$request->input('album_id'))->with('success', 'Se subio la foto');
    }

    public function show($id){
    	$photo = Photo::findOrFail($id);
    	return view('photos.show')->with('photo', $photo);
    }

     public function destroy($id){

      $photo = Photo::findOrFail($id);
//dd($id);
        Storage::disk('s3')->delete('storage/photos/'.$photo->album_id.'/'.$photo->photo);
     
      //  Storage::delete('storage/photos/'.$photo->album_id.'/'.$photo->photo);
        $photo->delete();

        return redirect('/albums/'.$photo->album_id)->with('success', 'Photo Deleted');
      
    }
}
