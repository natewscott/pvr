<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\MainHouseRequest;
use Maill;
use App\Mail\MainHouseBooking;
use Sessions;

class LodgingController extends Controller
{
    public function showMainHouse() {
    	return view('pages.main_house');
    }

    public function mail(MainHouseRequest $request) {
    	Mail::to('parisvalleyinfo@gmail.com')->send(new MainHouseBooking($request));

    	return redirect()->back->with('sucess', 'Your booking request has been sent. Some one will contact you shortly.');
    }


}
