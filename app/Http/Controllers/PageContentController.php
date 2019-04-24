<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContentController extends Controller
{
    public function home() {
    	return view('pages/home');
    }
    public function main_house() {
    	return view('pages/main_house');
    }
}
