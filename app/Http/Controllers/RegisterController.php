<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{ 
	public function wellcom(){
    	return view('wellsanber');
    }
    public function form(){
    	return view('form');
    }
//sesuaikan sama yang ada
    public function selamat(){
    	return view('selamat');
    }
    
}
