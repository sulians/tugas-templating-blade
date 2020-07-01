<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('form');
    }

    public function welcome_post(Request $request){
    	$nama=$request; //first_name dan last_name
    	return view('welcome',['data' =>$nama]);
    }
}
