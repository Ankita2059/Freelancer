<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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

Route::get('/',[AccountController::class,'home'])->name('home');

Route::get('/login', [AccountController::class,'loginView'])->name('login');
Route::get('/signup1',[AccountController::class,'signUpOption'])->name('client-freelancer');
Route::get('/signupc',[AccountController::class,'signUpClient'])->name('signUp-client');
Route::get('/signupf',[AccountController::class,'signUpFreelancer'])->name('signUp-freelancer');



