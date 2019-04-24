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
Route::get('history', 'PageContentController@history')->name('history');
Route::get('riding', 'PageContentController@riding')->name('riding');
Route::get('links', 'PageContentController@links')->name('links');
Route::get('main_house', 'PageContentController@main_house')->name('main house');
Route::get('party-pad', 'PageContentController@party-pad')->name('party pad');
Route::get('bunk-house', 'PageContentController@bunk-house')->name('bunk-house');
Route::get('shooting', 'PageContentController@shooting')->name('shooting');
Route::get('ranch', 'PageContentController@ranch')->name('ranch');
