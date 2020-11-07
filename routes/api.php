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

Route::post('register-user','API\UserController@register')->name('users.register');
Route::post('login-user','API\UserController@login')->name('users.login');

Route::get('logout-user','API\UserController@logout')->name('users.logout')->middleware('auth:api');
