<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\article;

class authController extends Controller
{
    public function authorization(Request $request){
		$user = User::where([['login',$request->login],['password',md5($request->password)]])->first();
		if(is_null($user)){
			return view('Logo');
		}
		Auth::login($user);
		return view('Feed',['posts' => article::all()],['people' => User::all()]);
	}
	public function logout(Request $request){
		Auth::logout();
		return view('Logo');	
	}
	public function logoreg(Request $request){
		return view('Reg');
	}
	public function registration(Request $request){
		$user=User::where('email_address',$request->email_address)->first();
		if(!is_null($user)){
			return view('Reg');
		}	
		$user = User::create(['login'=>$request->login,
		'email_address'=>$request->email_address,
		'password'=>md5($request->password),	
		'status'=> 0]);
		return view('Logo');
	}
}
