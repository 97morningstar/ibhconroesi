<?php
use App\Mail\DemoMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('p', function() {  //download file
	$my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'Test data to see if this works!';
fwrite($handle, $data);

$storagePath = Storage::disk('s3')->put("uploads", $my_file, 'public');
});

Route::get('test', function(){
	$user = new App\User;
	$user->name = 'Elisa';
	$user->email = '97morningstar@gmail.com';
	$user->password = bcrypt('elisa1997');
	$user->save();

	return $user;
});

Route::get('/lideres', function(){
	return view('elements.lideres');
});


Route::get('/', function () {
    return view('elements.menu');
});

Route::get('/servicios', function(){
	return view('elements.servicios');
});

Route::get('/eventos', function(){
	return view('elements.eventos');
});

Route::get('/quienessomos', function(){
	return view('elements.quienessomos');
});


Route::get('/contactos', ['as' => 'contacto', 'uses' => 'ContactController@index']);

Route::get('/email', function(){
	Mail::to('97morningstar@gmail.com')->send(new DemoMail);
});

Route::post('contactos/store', ['as' => 'contacto.store', 'uses' => 'ContactController@store']);

Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);

Route::post('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);

Route::get('logout', 'Auth\LoginController@logout');


/*
Route::resource('albums', 'AlbumsController');*/


Route::get('albums/create', ['as' => 'albums.create', 'uses' =>'AlbumsController@create' ]);

Route::post('albums', ['as' => 'albums.store', 'uses' => 'AlbumsController@store']);

Route::delete('albums/{id}', ['as' => 'albums.destroy', 'uses' => 'AlbumsController@destroy']);

Route::get('/galeria', 'AlbumsController@index');

Route::get('albums/{id}', ['as' => 'albums.show', 'uses' => 'AlbumsController@show']);



Route::get('/photos/create/{id}', 'PhotosController@create');

Route::post('/photos/store',[ 'as' => 'photos.store' , 'uses' => 'PhotosController@store']);

Route::get('/photos/{id}', 'PhotosController@show');

Route::delete('/photos/{id}', [ 'as' => 'photos.destroy', 'uses' => 'PhotosController@destroy']);

//quienes somos routes
Route::get('/quienessomos#section1', function(){
	return view('quienessomos#section1');
});
Route::get('/quienessomos#section2', function(){
	return view('quienessomos#section2');
});
Route::get('/quienessomos#section3', function(){
	return view('quienessomos#section3');
});
Route::get('/quienessomos#section4', function(){
	return view('quienessomos#section4');
});
Route::get('/quienessomos#section5', function(){
	return view('quienessomos#section5');
});
Route::get('/quienessomos#section6', function(){
	return view('quienessomos#section6');
});
