<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','ApiController@LogoAction');
Route::get('/Feed','ApiController@FeedAction');
Route::get('/About','ApiController@AboutAction');
Route::get('/Direct','ApiController@DirectAction');
Route::get('/Followers','ApiController@FollowersAction');
Route::get('/Following','ApiController@FollowingAction');
Route::get('/Search','ApiController@SearchAction');
Route::get('/Settings','ApiController@SettingsAction');
Route::get('/Notice','ApiController@NoticeAction');
Route::get('/Message','ApiController@MessageAction');
Route::get('/Post','ApiController@PostAction');





