<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BirdHouseRequest;
use Mail;
use App\Mail\BirdHouseBooked;
use Sessiosn;

class BirdHuntController extends Controller
{
   	public function show() {
   		return view('pages.bird_hunt');
   	}

   	public function mail(BirdHouseRequest $request) {

   		Mail::to('parisvalleyinfo@gmail.com')->send(new BirdHouseBooked($request));

   		return redirct()->back()->with('success', 'Thank you for your interest in the PVR Bird Hunt. Some one will be on touch with you shortly.');
   	}
}
