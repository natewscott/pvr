<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\HuntingBookingRequest;
use Mail;
use App\Mail\NewHuntingBooking;
use Illuminate\Notifications\Notifiable;

class BookHuntingController extends Controller
{
    use Notifiable;

    public function show() {
    	return view('pages.book_hunting');
    }

    public function mail(HuntingBookingRequest $request) {
    	Mail::to('nscott@rbcompany.com')->send(new NewHuntInquiry($request));

    	return redirect()->back()->with('status', 
    		'Your message has been sent. An associate will be in touch with you as soon as possible.');
    }
    // public function store(Request $request) {
    // 	$inquiry = $this->addToBookingTable($request, null);
    // }

    // protected function addToBookingTable($request) {
    // 	$inquiry = HuntingInquiry::create([
    // 		'check_in'=>$request->check_in,
    // 		'check_out'=>$request->check_out,
    // 	]);
    // }
}
