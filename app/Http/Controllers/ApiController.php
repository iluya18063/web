<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\article;
use App\User;
use App\comment;
use App\message;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function LogoAction(Request $request){
		return view('Logo');}
	public function FeedAction(Request $request){
		return view('Feed',['posts' => article::all()],['people' => User::all()]);}
	public function AboutAction(Request $request){
		return view('About',['posts' => article::all()]);}
	public function DirectAction(Request $request){
		return view('Direct',['people' => User::all()]);}
	public function FollowersAction(Request $request){
		return view('Followers',['people' => User::all()]);}
	public function FollowingAction(Request $request){
		return view('Following',['people' => User::all()]);}
	public function SettingsAction(Request $request){
		return view('Settings');}
	public function NoticeAction(Request $request){
		return view('Notice');}
	public function MessageAction(Request $request){
		return view('Message');}
	public function PostAction(Request $request){
		return view('Post');}
	
	public function getDB(Request $request){
		Dump(User::all());
		Dump(article::all());
		Dump(comment::all());
		Dump(message::all());
	}
	public function SearchAction(Request $request){
		$srchppl = (new searchController())->search($request->poisk);
		if(!is_null($srchppl)){
			return view('Search',['srchppl' => $srchppl]);
		}
	}
}

?>