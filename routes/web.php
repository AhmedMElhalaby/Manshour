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

Route::get('faq', 'HomeController@faq');
Route::get('privacy', 'HomeController@privacy');
Route::get('terms', 'HomeController@terms');
Route::get('commission', 'HomeController@commission');
Route::get('contact_us', 'HomeController@contact_us');
Route::get('app/lang', 'HomeController@lang');


//Route::get('login', 'AuthController@login');
//Route::get('register', 'AuthController@register');
//Route::get('verify', 'AuthController@verify');
//Route::post('verify', 'AuthController@postVerify');
//Route::get('resend_verification', 'AuthController@resend_verification');
//Route::get('password/forget', 'AuthController@forget_password');
//Route::post('password/forget', 'AuthController@post_forget_password');
//Route::get('password/reset', 'AuthController@reset_password');
//Route::post('password/reset', 'AuthController@post_reset_password');
//Route::get('user/update', 'AuthController@update_user');

Auth::routes(['verify'=>true]);
Route::get('/', 'HomeController@index')->name('home');
