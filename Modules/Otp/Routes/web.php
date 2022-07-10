<?php

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

Route::prefix('otp')->as('otp.')->group(function() {
    Route::get('/login', 'AuthenticateController@login')->name('authenticate.login.get.web');
    Route::post('/login', 'AuthenticateController@requestOtp')->name('authenticate.request-otp.post.web');
});
