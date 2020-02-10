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
Route::post('bird_hunt', 'BirdHuntController@mail')->name('bird hunt send');
Route::get('spring_hunt', 'SpringHuntController@show')->name('spring hunt');
Route::post('spring_hunt', 'SpringHuntController@mail')->name('spring hunt send');
Route::get('day_hunt', 'DayHuntController@show')->name('day hunt');
Route::post('day_hunt', 'DayHuntController@mail')->name('day hunt send');
Route::get('two_day_hunt', 'TwoDayHuntController@show')->name('two day');
Route::post('two_day_hunt', 'TwoDayHuntController@mail')->name('two day send');
Route::get('three_day_hunt', 'threeDayHuntController@show')->name('three day');
Route::post('three_day_hunt', 'threeDayHuntController@mail')->name('three day send');

Route::group(['prefix'=>'admin'], function(){
	Route::get('/', 'BackEndController@index')->name('admin home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
