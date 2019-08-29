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

Route::get('/', function () {
    $partners = \App\Models\Information\Partner::all();
    $testimonies = \App\Models\Information\Testimony::all();
        $homesliders = \App\Models\Information\Homeslide::all();

    return view('welcome')
        ->with('partners',$partners)
        ->with('homeslides',$homesliders)
        ->with('testimonies',$testimonies);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registered/{user}', 'Auth\RegisterController@showRegisteredForm')->name("auth.registered");

Route::get('/verification/{user}', 'Auth\LoginController@verification')->name("auth.verification");
Route::get('/account/confirm/{responce}', 'Auth\ConfirmAccountController@confirm')->name("auth.account.confirm");

Route::get('/account/confirm_tmx/{token}', 'Auth\ConfirmAccountController@confirmTmxUser')->name("auth.account.confirm_tmx");

Route::get('/account/sms_confirm/{user}', 'Auth\ConfirmAccountController@smsConfirm')->name("auth.account.sms_confirm");

Route::get('account/confirm/resend/{user}', 'Auth\ConfirmAccountController@sendConfirmationEmail')->name("auth.account.confirm.resend");


Route::group([''], function () {
    includeRouteFiles(__DIR__.'/Web/');
});

Route::group(['middleware' => 'csrf'], function () {
    includeRouteFiles(__DIR__.'/Public/');
});

Route::get('lang/{lang}', 'LanguageController@swap');
