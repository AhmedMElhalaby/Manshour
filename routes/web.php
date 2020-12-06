<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes(['verify'=>true]);
Route::group([
    'prefix'  => 'auth',
    'middleware' => 'auth',
    'namespace' => 'Auth',
], function() {
    Route::post('check_verify', 'VerificationController@check_verify');
});
Route::get('/', 'HomeController@index')->name('home');
Route::get('faq', 'HomeController@faq');
Route::get('privacy', 'HomeController@privacy');
Route::get('terms', 'HomeController@terms');
Route::get('commission', 'HomeController@commission');
Route::get('contact_us', 'HomeController@contact_us');
Route::post('contact_us', 'HomeController@post_contact_us');
Route::get('app/lang', 'HomeController@lang');
Route::group([
    'prefix'  => 'advertisements',
], function() {
    Route::get('/', 'AdvertisementController@index');
    Route::get('response', 'AdvertisementController@response');
    Route::get('show', 'AdvertisementController@show');
    Route::group([
        'middleware' => 'auth',
    ], function() {
        Route::get('create', 'AdvertisementController@create');
        Route::post('store', 'AdvertisementController@store');
        Route::post('comment', 'AdvertisementController@comment');

    });
});
Route::group([
    'prefix'  => 'response',
], function() {
    Route::get('categories', 'ResponseController@categories');
});
