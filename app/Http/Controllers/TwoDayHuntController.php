<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TwoDayHuntRequest;
use Mail;
use App\Mail\TwoDayHuntBooked;
use Sessions;

class TwoDayHuntController extends Controller
{
    public function show() {
    	return view('pages.two_day_hunt');
    }

    public function mail(TwoDayHuntRequest $request) {

    	Mail::to('parisvalleyinfo@gmail.com')->send(new TwoDayHuntBooked($request));

    	return redirect()->back()->with('success', 'Thank you for your interest in the PVR Two Hunt. Some one will be in touch with you shorty.');
    }
}
