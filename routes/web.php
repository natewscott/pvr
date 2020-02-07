<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Static Pages
Route::get('/', 'PageContentController@home')->name('home');
Route::get('about', 'PageContentController@about')->name('about');
Route::get('riding', 'PageContentController@riding')->name('riding');
Route::get('info', 'PageContentController@info')->name('info');
Route::get('activities', 'PageContentController@activities')->name('activities');
Route::get('shooting', 'PageContentController@shooting')->name('shooting');
Route::get('accommodations', 'PageContentController@accommodations')->name('accommodations');
// Route::get('contact', 'PageContentController@getcontact')->name('contact');
// Route::post('contact', 'PageContentController@postcontact')->name('contact form');
Route::get('riding', 'PageContentController@riding')->name('riding');

Route::get('contact', 'ContactController@show')->name('contact');
Route::post('contact', 'ContactController@mail')->name('contact form');

//Lodging Page
Route::get('main_house', 'LodgingController@show')->name('main house');
Route::post('main_house', 'LodgingController@mail')->name('main house form');
Route::get('party_pad', 'PartyPadController@show')->name('party pad');
Route::post('party_pad', 'PartyPadController@mail')->name('party pad send');
Route::get('bunk_house', 'BunkHouseController@show')->name('bunk_house');
Route::post('bunk_house', 'BunkHouseController@mail')->name('bunk house send');

//Booking Pages
Route::get('booking', 'PageContentController@booking')->name('booking');
Route::get('hunting', 'PageContentController@hunting')->name('hunting');
Route::get('bird_hunt', 'BirdHuntController@show')->name('bird hunt');
Route::post('bird_hunt', 'BirdHuntController@mial')->name('bird hunt send');
Route::get('spring_hunt', 'HuntingTripsController@spring')->name('spring hunt');
// Route::post()->name();
Route::get('day_hunt', 'HuntingTripsController@day_hunt')->name('day hunt');
// Route::post()->name();
Route::get('two_day_hunt', 'HuntingTripsController@two_day')->name('two day');
// Route::post()->name();
Route::get('three_day_hunt', 'HuntingTripsController@three_day')->name('three day');
// Route::post()->name();
Route::get('book_hunting', 'BookHuntingController@show')->name('book hunting');
Route::post('book_hunting', 'BookHuntingController@mail')->name('hunt send');


Route::group(['prefix'=>'admin'], function(){
	Route::get('/', 'BackEndController@index')->name('admin home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
