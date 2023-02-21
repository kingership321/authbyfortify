<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});


// Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    }
    )->name('home');
// });

Route::view('/auth.header', 'header');
Route::view('/footer', 'footer');
Route::get('/logout', function(){
    Auth::logout();
    return view('home');
});

Route::view('/package', 'package');
Route::view('/custompackage', 'custompackage');
Route::view('/individualPackage', 'individualPackage');
Route::view('/bookingPage', 'bookingPage');
Route::view('/bookingPage1', 'bookingPage1');

Route::view('/about', 'about');
Route::view('/contact', 'contact');