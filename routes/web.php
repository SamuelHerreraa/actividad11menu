<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/', 'main')->name('main');
Route::view('/photos', 'photos')->name('photos');
Route::view('/contact', 'contact')->name('contact');