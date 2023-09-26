<?php

use App\Http\Controllers\ContactUsController;
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

Route::post('/contact-us', [ContactUsController::class, 'contactUs'])->name('contact_us_post');

Route::get('/about-us', function () {
    return view('aboutUs');
})->name('about_us');

Route::prefix('/services')->group(function() {
    Route::get('/trading', function(){
        return view('trading');
    })->name('trading');
});


Route::get('our-approch', function(){
    return view('ourApproch');
})->name('ourApproch');