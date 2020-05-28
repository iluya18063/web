<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function LogoAction(Request $request){
		return view('Logo');
	}
	public function FeedAction(Request $request){
		return view('Feed');
	}
	public function AboutAction(Request $request){
		return view('About');
	}
	public function DirectAction(Request $request){
		return view('Direct');
	}
	public function FollowersAction(Request $request){
		return view('Followers');
	}
	public function FollowingAction(Request $request){
		return view('Following');
	}
	public function SearchAction(Request $request){
		return view('Search');
	}
	public function SettingsAction(Request $request){
		return view('Settings');
	}
	public function NoticeAction(Request $request){
		return view('Notice');
	}
	public function MessageAction(Request $request){
		return view('Message');
	}
	public function PostAction(Request $request){
		return view('Post');
	}
}

