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
//    dd(code_value()->getCodeForSelect(4));

    $about = \App\Models\Information\About::get()->first();
    $partners = \Illuminate\Support\Facades\DB::table('partners')->paginate(4);
    $testimonies = \Illuminate\Support\Facades\DB::table('testimonies')->paginate(4);
    $homesliders = \App\Models\Information\Homeslide::all();
    $packages = \Illuminate\Support\Facades\DB::table('package')->paginate(4);



    return view('welcome')
        ->with('partners',$partners)
        ->with('homeslides',$homesliders)
        ->with('testimonies',$testimonies)
        ->with('about',$about)
        ->with('packages',$packages);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registered/{user}', 'Auth\RegisterController@showRegisteredForm')->name("auth.registered");
Route::post('/register_from_welcome', 'Auth\RegisterController@registerFromWelcomePage')->name("auth.register_from_welcome");
Route::post('/update_user/{user}', 'Auth\RegisterController@update')->name("update_user");




Route::get('/verification/{user}', 'Auth\LoginController@verification')->name("auth.verification");
Route::get('/account/confirm/{responce}', 'Auth\ConfirmAccountController@confirm')->name("auth.account.confirm");


Route::get('/account/sms_confirm/{user}', 'Auth\ConfirmAccountController@smsConfirm')->name("auth.account.sms_confirm");

Route::get('account/confirm/resend/{user}', 'Auth\ConfirmAccountController@sendConfirmationEmail')->name("auth.account.confirm.resend");


Route::group([''], function () {
    includeRouteFiles(__DIR__.'/Web/');
});

Route::group(['middleware' => 'csrf'], function () {
    includeRouteFiles(__DIR__.'/Public/');
});

Route::get('lang/{lang}', 'LanguageController@swap');
