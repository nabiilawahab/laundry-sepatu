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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
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
Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
});
Route::get('/profileadmin', function () {
    return view('profileadmin');
});
Route::get('/sign-inadmin', function () {
    return view('sighn-inadmin');
});
Route::get('/kategoriLayanan', function () {
    return view('kategoriLayanan');
});
Route::get('/admin', function () {
    return view('index');
});
Route::get('/tabelcustomer', function () {
    return view('tabelcustomer');
});
Route::get('/tabelcatalog', function () {
    return view('catalog');
});
Route::get('/tabelstatus', function () {
    return view('tabelstatus');
});
