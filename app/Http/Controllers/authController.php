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
			echo"<script>alert('Такого пользователя не существует!');</script>";
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
		if(!is_null(User::where('email_address',$request->email_address)->first())){
			echo"<script>alert('Не введён адрес электронной почты!');</script>";
			return view('Reg');
		}		
		$user = User::create([
		'login'=>$request->login,
		'email_address'=>$request->email_address,
		'password'=>md5($request->password),	
		'status'=> 0]);
		return view('Logo');
	}
}
