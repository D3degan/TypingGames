<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/how-to-play', 'how-to-play')->name('how-to-play');
Route::view('/about', 'about')->name('about');
