<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonateController;


Route::get('/', function () {
     return view('welcome');
 });



Route::get('index', function () {
    return view('index');
});


Route::get('about', function () {
    return view('about');
});

Route::get('donation', function () {
    return view('donation');
});

Route::resource('donations', DonateController::class);
Route::resource('contacts', ContactController::class);
