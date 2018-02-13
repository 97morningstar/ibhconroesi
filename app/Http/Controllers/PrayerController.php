<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

use App\Http\Requests\CreatePrayerRequest;
use App\Prayer;
use App\Mail\PrayerEmail;



class PrayerController extends Controller
{
    public function index(){
    	return view('elements.prayer');
    }


  	public function store(CreatePrayerRequest $request){
  		
  		$prayer = Prayer::create($request->all());

  		Mail::to('97morningstar@gmail.com')->send(new PrayerEmail($prayer));

  		return redirect()->route('oracion')->with('info', 'Hemos recibido tu mensaje!');
  	}

}
