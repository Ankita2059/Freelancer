<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home(){
       return view ('layouts.dashboard');
    }

    public function loginView(){
        return view ('account.login');
     }

     public function signUpOption(){
        return view ('account.signup1st');
     }
     
     public function signUpClient(){
        return view ('account.signupclient');
     } 

     public function signUpFreelancer(){
        return view ('account.sinupfreelancer');
     } 
}
