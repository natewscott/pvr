<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuntingTripsController extends Controller
{
    public function bird() {
    	return view('pages.bird_hunt');
    }
    public function spring() {
    	return view('pages.spring_hunt');
    }
    public function day_hunt() {
    	return view('pages.day_hunt');
    }
    public function two_day() {
    	return view('pages.two_day_hunt');
    }
    public function three_day() {
    	return view('pages.three_day_hunt');
    }
}
