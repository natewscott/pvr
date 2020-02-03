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
Route::get('main_house', 'LodgingController@showMainHouse')->name('main house');
Route::get('party_pad', 'PageContentController@party_pad')->name('party pad');
Route::get('bunk_house', 'PageContentController@bunk_house')->name('bunk_house');

//Booking Pages
Route::get('booking', 'PageContentController@booking')->name('booking');
Route::get('hunting', 'PageContentController@hunting')->name('hunting');
Route::get('bird_hunt', 'HuntingTripsController@bird')->name('bird hunt');
Route::get('spring_hunt', 'HuntingTripsController@spring')->name('spring hunt');
Route::get('day_hunt', 'HuntingTripsController@day_hunt')->name('day hunt');
Route::get('two_day_hunt', 'HuntingTripsController@two_day')->name('two day');
Route::get('three_day_hunt', 'HuntingTripsController@three_day')->name('three day');
Route::get('book_hunting', 'BookHuntingController@show')->name('book hunting');
Route::post('book_hunting', 'BookHuntingController@mail')->name('hunt send');


Route::group(['prefix'=>'admin'], function(){
	Route::get('/', 'BackEndController@index')->name('admin home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
