<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\threeDayHuntRequest;
use Mail;
use App\Mail\threeDayHuntbooked;
use Sessions;

class threeDayHuntController extends Controller
{
    public function show() {
    	return view('pages.three_day_hunt');
    }

    public function mail(threeDayHuntRequest $request) {

    	Mail::to('parisvalleyinfo@gmail.com')->send(new threeDayHuntbooked($request));
    	return redirect()->back()->with('success', 'Thank you for your interest in the PVR Three Day Hunt. Some one will be in touch with you shortly.');
    }
}
