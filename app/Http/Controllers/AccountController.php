<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home(){
<<<<<<< HEAD
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
=======
        return view('layouts.dashboard');
    }

    public function loginView(){
      return view('account.login');

    }
    public function signUpOption(){
        return view('account.signup1st');
    }

    public function signUpClient(){
        return view('account.signupclient');
    }
    public function signUpFreelancer(){
        return view('account.signupfreelancer');
    }
>>>>>>> b6d8c5150175620a198460ad9d54760d415c0a79
}
