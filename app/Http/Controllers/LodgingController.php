<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MainCabinRequest;
use Mail;
use App\Mail\MainCabinBooked;
use Sessions;

class LodgingController extends Controller
{
    public function show() {
    	return view('pages.main_house');
    }

    public function mail(MainCabinRequest $request) {

    	Mail::to('parisvalleyinfo@gmail.com')->send(new MainCabinBooked($request));

    	return redirect()->back()->with('sucess', 'Thank you for your interest in the Cabin, some one will be in touch with you shortly');
    }
}
