<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/contact-us', function () {
    return view('contactUs');
})->name('contact_us');

Route::prefix('/services')->group(function() {
    Route::get('/oil-and-gas-trading', function(){
        return view('trading');
    })->name('oilTrading');

    Route::get('/renewable-energy-equipment-trading', function(){
        return view('renewable');
    })->name('renewableTrading');
});
