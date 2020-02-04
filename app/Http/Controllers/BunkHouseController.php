<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BunkHouseRequest;
use Mail;
use App\Mail\BunkHouseBooking;
use Sessions;

class BunkHouseController extends Controller
{
    public function show() {
    	return view('pages.bunk_house');
    }

    public function mail(BunkHouseRequest $request) {

    	Mail::to('parisvalleyinfo@gmail.com')->send(new BunkHouseBooking($request));

    	return redirect()->back()->with('sucess', 'Thank you for your interest in the Bunk House, some one will be in touch with you shortly');
    }

}
