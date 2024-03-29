<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "Admin" middleware group. Enjoy building your Admin!
|
*/
Route::get('app/lang', 'HomeController@lang');


/*
|--------------------------------------------------------------------------
| Admin Auth
|--------------------------------------------------------------------------
| Here is where admin auth routes exists for login and log out
*/
Route::group([
    'namespace'  => 'Auth',
], function() {
    Route::get('login', ['uses' => 'LoginController@showLoginForm','as'=>'admin.login']);
    Route::post('login', ['uses' => 'LoginController@login']);
    Route::group([
        'middleware' => 'auth.admin',
    ], function() {
        Route::post('logout', ['uses' => 'LoginController@logout','as'=>'admin.logout']);
    });
});
/*
|--------------------------------------------------------------------------
| Admin After login in
|--------------------------------------------------------------------------
| Here is where admin panel routes exists after login in
*/
Route::group([
    'middleware'  => 'auth.admin',
], function() {
    Route::get('/', 'HomeController@index');
    Route::post('notification/send', 'HomeController@general_notification');

    /*
    |--------------------------------------------------------------------------
    | Admin > App Management
    |--------------------------------------------------------------------------
    | Here is where App Management routes
    */

    Route::group([
        'prefix'=>'app_managements',
        'namespace'=>'AppManagement',
    ],function () {
        Route::group([
            'prefix'=>'admins'
        ],function () {
            Route::get('/','AdminController@index');
            Route::get('/create','AdminController@create');
            Route::post('/','AdminController@store');
            Route::get('/{admin}','AdminController@show');
            Route::get('/{admin}/edit','AdminController@edit');
            Route::put('/{admin}','AdminController@update');
            Route::delete('/{admin}','AdminController@destroy');
            Route::patch('/update/password',  'AdminController@updatePassword');
            Route::get('/option/export','AdminController@export');
            Route::get('/{id}/activation','AdminController@activation');
        });
        Route::group([
            'prefix'=>'roles'
        ],function () {
            Route::get('/','RoleController@index');
            Route::get('/create','RoleController@create');
            Route::post('/','RoleController@store');
            Route::get('/{role}','RoleController@show');
            Route::get('/{role}/edit','RoleController@edit');
            Route::put('/{role}','RoleController@update');
            Route::delete('/{role}','RoleController@destroy');
            Route::get('/option/export','RoleController@export');
        });
        Route::group([
            'prefix'=>'permissions'
        ],function () {
            Route::get('/','PermissionController@index');
            Route::get('/create','PermissionController@create');
            Route::post('/','PermissionController@store');
            Route::get('/{permission}','PermissionController@show');
            Route::get('/{permission}/edit','PermissionController@edit');
            Route::put('/{permission}','PermissionController@update');
            Route::delete('/{permission}','PermissionController@destroy');
            Route::get('/option/export','PermissionController@export');
        });
    });

    /*
    |--------------------------------------------------------------------------
    | Admin > App Data
    |--------------------------------------------------------------------------
    | Here is where App Data routes
    */
    Route::group([
        'prefix'=>'app_data',
        'namespace'=>'AppData',
    ],function () {
        Route::group([
            'prefix'=>'settings'
        ],function () {
            Route::get('/','SettingController@index');
            Route::post('/','SettingController@updateFields');
            Route::get('/{setting}/edit','SettingController@edit');
            Route::put('/{setting}','SettingController@update');
        });

        Route::group([
            'prefix'=>'faqs'
        ],function () {
            Route::get('/','FaqController@index');
            Route::get('/create','FaqController@create');
            Route::post('/','FaqController@store');
            Route::get('/{faq}','FaqController@show');
            Route::get('/{faq}/edit','FaqController@edit');
            Route::put('/{faq}','FaqController@update');
            Route::delete('/{faq}','FaqController@destroy');
            Route::get('/option/export','FaqController@export');
            Route::get('/{id}/activation','FaqController@activation');
        });
        Route::group([
            'prefix'=>'bank_accounts'
        ],function () {
            Route::get('/','BankAccountController@index');
            Route::get('/create','BankAccountController@create');
            Route::post('/','BankAccountController@store');
            Route::get('/{bank_account}','BankAccountController@show');
            Route::get('/{bank_account}/edit','BankAccountController@edit');
            Route::put('/{bank_account}','BankAccountController@update');
            Route::delete('/{bank_account}','BankAccountController@destroy');
            Route::get('/option/export','BankAccountController@export');
        });
        Route::group([
            'prefix'=>'cities'
        ],function () {
            Route::get('/','CityController@index');
            Route::get('/create','CityController@create');
            Route::post('/','CityController@store');
            Route::get('/{city}','CityController@show');
            Route::get('/{city}/edit','CityController@edit');
            Route::put('/{city}','CityController@update');
            Route::delete('/{city}','CityController@destroy');
            Route::get('/option/export','CityController@export');
        });
        Route::group([
            'prefix'=>'categories'
        ],function () {
            Route::get('/','CategoryController@index');
            Route::get('/create','CategoryController@create');
            Route::post('/','CategoryController@store');
            Route::get('/{category}','CategoryController@show');
            Route::get('/{category}/edit','CategoryController@edit');
            Route::put('/{category}','CategoryController@update');
            Route::delete('/{category}','CategoryController@destroy');
            Route::get('/option/export','CategoryController@export');
        });
        Route::group([
            'prefix'=>'banners'
        ],function () {
            Route::get('/','BannerController@index');
            Route::get('/create','BannerController@create');
            Route::post('/','BannerController@store');
            Route::get('/{banner}','BannerController@show');
            Route::get('/{banner}/edit','BannerController@edit');
            Route::put('/{banner}','BannerController@update');
            Route::delete('/{banner}','BannerController@destroy');
            Route::get('/option/export','BannerController@export');
        });
        Route::group([
            'prefix'=>'abuse_types'
        ],function () {
            Route::get('/','AbuseReportController@index');
            Route::get('/create','AbuseReportController@create');
            Route::post('/','AbuseReportController@store');
            Route::get('/{abuse_type}','AbuseReportController@show');
            Route::get('/{abuse_type}/edit','AbuseReportController@edit');
            Route::put('/{abuse_type}','AbuseReportController@update');
            Route::delete('/{abuse_type}','AbuseReportController@destroy');
            Route::get('/option/export','AbuseReportController@export');
        });
    });
    /*
    |--------------------------------------------------------------------------
    | Admin > App Users
    |--------------------------------------------------------------------------
    | Here is where App Users routes
    */

    Route::group([
        'prefix'=>'user_managements',
        'namespace'=>'UserManagement',
    ],function () {
        Route::group([
            'prefix'=>'users'
        ],function () {
            Route::get('/','UserController@index');
            Route::get('/{user}','UserController@show');
            Route::patch('/update/password',  'UserController@updatePassword');
            Route::get('/option/export','UserController@export');
            Route::get('/{id}/activation','UserController@activation');
        });
        Route::group([
            'prefix'=>'tickets'
        ],function () {
            Route::get('/','TicketController@index');
            Route::get('/{ticket}','TicketController@show');
            Route::get('/{ticket}/close','TicketController@close');
        });
    });
    /*
    |--------------------------------------------------------------------------
    | Admin > App Content
    |--------------------------------------------------------------------------
    | Here is where App Content routes
    */

    Route::group([
        'prefix'=>'app_content',
        'namespace'=>'AppContent',
    ],function () {
        Route::group([
            'prefix'=>'advertisements'
        ],function () {
            Route::get('/','AdvertisementController@index');
            Route::get('/{advertisement}','AdvertisementController@show');
            Route::delete('/{advertisement}','AdvertisementController@destroy');
            Route::get('/option/export','AdvertisementController@export');
        });
        Route::group([
            'prefix'=>'deleted_advertisements'
        ],function () {
            Route::get('/','DeletedAdvertisementController@index');
            Route::delete('/{advertisement}','DeletedAdvertisementController@destroy');
            Route::get('/option/export','DeletedAdvertisementController@export');
        });
        Route::group([
            'prefix'=>'abuse_comments'
        ],function () {
            Route::get('/','AbuseCommentController@index');
            Route::get('{comment}/delete_comment','AbuseCommentController@delete_comment');
        });
    });

});
