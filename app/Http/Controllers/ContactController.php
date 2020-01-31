<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewContactRequest;
use Mail;
use App\Mail\NewContact;
use Sessions;


class ContactController extends Controller
{
    public function show() {
    	return view ('pages.contact');
    }

    public function mail(Request $request) {
    	$this->validate($request, [
    		"name" => 'required',
            "lastname" => 'required',
            "email" => 'required|email',
            "subject" => 'required',
            "msg" => 'required|min:10',
    	]);
    	
    	Mail::send('emails.contact', [
    		'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->msg,
    	],
    	function($contact) use ($request) {
    		$contact->from($request->email, $request->name);
    		$contact->to('parisvalleyinfo@gmail.com')
    				->subject('New Contact');
    	});
    	return redirect()->back()->with('success', 'Your email has benn sent.');
    }
}
