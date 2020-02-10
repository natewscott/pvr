<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SpringHuntRequest;
use Mail;
use App\Mail\SpringHuntBooked;
use Sessions;

class SpringHuntController extends Controller
{
    public function show() {
    	return view('pages.spring_hunt');
    }

    public function mail(SpringHuntRequest $request) {

    	Mail::to('parisvalleyinfo@gmail.com')->send(new SpringHuntBooked($request));

    	return redirect()->back()->with('sucess','Thank you for your interest in the PVR Spring Turkey hunt, some one will be in touch with you shortly.');
    }
}
