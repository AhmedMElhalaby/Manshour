<?php

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

Route::group([
    'prefix' => 'auth',
], function () {
    Route::post('login','AuthController@login');
    Route::post('signup','AuthController@register');
    Route::post('forget_password','AuthController@forget_password');
    Route::post('reset_password','AuthController@reset_password');
    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('me','AuthController@show');
        Route::post('refresh','AuthController@refresh');
        Route::post('update','AuthController@update');
        Route::get('resend_verify', 'AuthController@resend_verify');
        Route::post('verify', 'AuthController@verify');
        Route::post('change_password','AuthController@change_password');
        Route::post('logout','AuthController@logout');
    });
});
Route::group([
    'middleware' => 'auth:api'
], function() {
    Route::group([
        'prefix' => 'notifications',
    ], function() {
        Route::get('/', 'NotificationController@index');
        Route::post('send', 'NotificationController@send');
        Route::post('read', 'NotificationController@read');
        Route::post('read/all', 'NotificationController@read_all');
    });
    Route::group([
        'prefix' => 'home',
    ], function() {
        Route::get('faqs','HomeController@faqs');
        Route::post('send_notification','HomeController@send_notification');
    });

    Route::group([
        'prefix' => 'tickets',
    ], function() {
        Route::get('/','TicketController@index');
        Route::get('show','TicketController@show');
        Route::post('store','TicketController@store');
        Route::post('response','TicketController@response');
    });

});
Route::get('install','HomeController@install');
