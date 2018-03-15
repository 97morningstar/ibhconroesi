<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    function __construct(){
        $this->middleware('auth' , ['only' => ['create', 'destroy', 'store',]]);
      }


    public function create(){
    	return view('eventos.create');
    } 

    public function store(){
    	return view('/');
    }

}
