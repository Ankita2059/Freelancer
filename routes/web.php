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
    return view('layouts.dashboard');
});

Route::view('/login', 'account.login')->name('login');
Route::view('/signup1','account.signup1st')->name('client-freelancer');
Route::view('/signupc','account.signupclient')->name('signUp-client');
Route::view('/signupf','account.signupfreelancer')->name('signUp-freelancer');


