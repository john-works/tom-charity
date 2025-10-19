<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('index', function () {
    return view('index');
});


Route::get('about', function () {
    return view('about');
});



Route::resource('contacts', ContactController::class);
