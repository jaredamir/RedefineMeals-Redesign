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
    return view('index');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/aboutus', function () {
    return view('aboutUs');
});

Route::get('/giftcards', function () {
    return view('giftCards');
});

Route::get('/meettheteam', function () {
    return view('meetTheTeam');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/stores', function () {
    return view('store_locations');
});

Route::get('/coaching', function () {
    return view('nutrition_coaching');
});