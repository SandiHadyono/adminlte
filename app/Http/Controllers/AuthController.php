<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login(){
        return view('layouts.newlogin');
    }
    public function register(){
        return view('layouts.newregister');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function logout(){
        return redirect('/newlogin');
    }
    public function postlogin(Request $request){
    	//kondisi login
    	if (Auth::attempt($request->only('email', 'password'))){
    		//jika login sukses
    		return redirect('/dashboard');
    	}
    	else{
    		//jika gagal login
    		return redirect('/newlogin');
    	}
    }
    public function reject(){
        return view('layouts.reject');
    }
    public function rejectrole(){
        return view('layouts.rejectrole');
    }
}
