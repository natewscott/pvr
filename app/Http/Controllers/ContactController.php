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

    public function mail(NewContactRequest $request) {
    	Mail::to('nscott@rbcompany.com')->send(new NewContact($request));

    	return redirect()->back()->with('success', 'Thank you for your message, we will get in touch with you as soon as possible');
    }
}
