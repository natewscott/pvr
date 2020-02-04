<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MainHouseRequest;
use Mail;
use App\Mail\MainHouseBooking;
use Sessions;

class LodgingController extends Controller
{
    public function showMainHouse() {
    	return view('pages.main_house');
    }

    public function mailMainHouse(MainHouseRequest $request) {
    	Mail::to('parisvalleyinfo@gmail.com')->send(new MainHouseBooking($request));

    	return redirect()->back->with('sucess', 'Your booking request has been sent. Some one will contact you shortly.');
    }


}
