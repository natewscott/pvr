<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookHuntingController extends Controller
{
    use Notifiable;

    public function show() {
    	return view('pages.book_hunting');
    }
}
