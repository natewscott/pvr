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
    public function history() {
    	return view ('pages/history');
    }
    public function riding() {
    	return view('riding');
    }
    public function links() {
    	return view('pages/links');
    }
    public function party_pad() {
    	return view('pages/party_pad');
    }
    public function bunk_house() {
    	return view('pages/bunk_house');
    }
    public function shooting() {
    	return view('pages/shooting');
    }
    public function ranch() {
    	return view('pages/ranch');
    }
}
