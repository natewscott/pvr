<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartyPadController extends Controller
{
    public function show() {
    	return view('pages.party_pad');
    }
}
