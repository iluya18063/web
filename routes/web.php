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

Route::get('/', function () {
    return view('Logo');
});

Route::get('/Feed', function () {
    return view('Feed');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Direct', function () {
    return view('Direct');
});

Route::get('/Followers', function () {
    return view('Followers');
});

Route::get('/Following', function () {
    return view('Following');
});

Route::get('/Message', function () {
    return view('Message');
});

Route::get('/Notice', function () {
    return view('Notice');
});

Route::get('/Post', function () {
    return view('Post');
});

Route::get('/Search', function () {
    return view('Search');
});

Route::get('/Settings', function () {
    return view('Settings');
});
