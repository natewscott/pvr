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
Route::get('main_house', 'PageContentController@main_house')->name('main house');
Route::get('party_pad', 'PageContentController@party_pad')->name('party pad');
Route::get('bunk_house', 'PageContentController@bunk_house')->name('bunk_house');
Route::get('activities', 'PageContentController@activities')->name('activities');
Route::get('shooting', 'PageContentController@shooting')->name('shooting');
Route::get('accommodations', 'PageContentController@accommodations')->name('accommodations');
Route::get('contact', 'PageContentController@contact')->name('contact');
Route::get('booking', 'PageContentController@booking')->name('booking');

Route::get('hunting', 'PageContentController@hunting')->name('hunting');
