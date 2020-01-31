<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\NewContactRequest;
use Mail;
// use App\Mail\NewContact;
use Sessions;


class ContactController extends Controller
{
    public function show() {
    	return view ('pages.contact');
    }

    public function mail(Request $request) {
    	$this->validate($request, [
    		"name" => 'required',
            "last_name" => 'required',
            "email" => 'required|email',
            "subject" => 'required',
            "msg" => 'required|min:10',
    	]);
    	
    	Mail::send('emails.contact', [
    		'name' => $request->name,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->msg,
    	],
    	function($contactMessage) use ($request){
                        $contactMessage->from($request->email, $request->name, $request->last_name);

                $contactMessage->to('parisvalleyinfo@gmail.com')
                                ->subject('New Inquiry From Contact Page');
        });
    	return redirect()->back()->with('success', 'Your email has been sent.');
    }
}
