<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class searchController extends Controller
{
    public function search($poisk){
		return User::where('login','like', $poisk.'%')->get();
	}
}
