<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/addappointment',function() {
    return view('addappointment');
});
Route::get('/patientlist',function() {
    return view('patientlist');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index',function() {
   return view('index'); 
});

Route::get('/logout', 'Auth\LoginController@logout');