<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('home/profile', 'home')->name('hu');
Route::view('home/profile/user', 'home')->name('user');
Route::view('about', 'about');

Route::get('show',[HomeController::class, 'show']);
Route::get('user',[HomeController::class, 'user']);