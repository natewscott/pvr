<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BirdHuntRequest;
use Mail;
use App\Mail\BirdHuntBooked;
use Session;

class BirdHuntController extends Controller
{
   	public function show() {
   		return view('pages.bird_hunt');
   	}

   	public function mail(BirdHuntRequest $request) {

   		Mail::to('parisvalleyinfo@gmail.com')->send(new BirdHuntBooked($request));

   		return redirect()->back()->with('success', 'Thank you for your interest in the PVR Bird Hunt. Some one will be on touch with you shortly.');
   	}
}
