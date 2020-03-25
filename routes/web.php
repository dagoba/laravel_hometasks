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
Route::resource('finance', 'FinanceController');

Route::get('/', function () {
    return redirect()->route('finance.index');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/contacts', function () {
    return view('contactpage');
});

Route::get('/quotes', function () {
    return view('quotespage');
});

Route::get('/count', 'CountController@index');

Route::get('/quotes', 'QuoteController@quoteRotator');