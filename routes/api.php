<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('users')->group(function () {
    Route::get('/', 'Api\UserController@index')->name('users.list');
    Route::post('/', 'Api\UserController@store')->name('users.store');
    Route::get('/{id}', 'Api\UserController@show')->name('users.show');
    Route::put('/{id}', 'Api\UserController@update')->name('users.update');
    Route::delete('/{id}', 'Api\UserController@delete')->name('users.delete');
});
Route::prefix('appointments')->group(function () {
    Route::get('/', 'Api\AppointmentController@index')->name('appointments.list');
    Route::post('/', 'Api\AppointmentController@store')->name('appointments.store');
    Route::get('/{id}', 'Api\AppointmentController@show')->name('appointments.show');
    Route::put('/{id}', 'Api\AppoitnemntController@update')->name('appointments.update');
    Route::delete('/{id}', 'Api\AppointmentController@delete')->name('appointments.delete');
});
