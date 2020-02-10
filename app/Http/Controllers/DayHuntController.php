<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DayHuntRequest;
use Mail;
use App\Mail\DayHuntBooked;
use Sessions;

class DayHuntController extends Controller
{
    public function show() {
    	return view('pages.day_hunt');
    }

    public function mail(DayHuntRequest $request) {

    	Mail::to('parisvalleyinfo@gmail.com')->send(new DayHuntBooked($request));

    	return redirect()->back()->with('sucess', 'Thank you for your interest in the PVR Day Hunt,some one will be in touch with you shortly.');
    }
}
