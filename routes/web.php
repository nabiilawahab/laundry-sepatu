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
    return view('landing');
});

Route::get('/home', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('landabout');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/testimoni', function () {
    return view('testimoni');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboardAdmin', function () {
    return view('dashboardAdmin');
});

