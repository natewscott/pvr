<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PartyPadRequest;
use Mail;
use App\Mail\PartyPadBooking;
use Sessions;

class PartyPadController extends Controller
{
    public function show() {
    	return view('pages.party_pad');
    }

    public function mail(PartyPadRequest $request) {

    	Mail::to('parisvalleyinfo@gmail.com')->send(new PartyPadBooking($request));

    	return redirect()->back()->with('sucess', 'Thank you for your interest in the Cabin, some one will be in touch with you shortly');
    }
}
