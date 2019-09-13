<?php


//Groups Routes
Route::group(['middleware' => 'auth', 'namespace' => 'Payment', 'prefix' => 'payment', 'as' => 'payment.'], function () {

Route::get('/recharge','PaymentController@displayRechargeForm')->name('recharge');

    Route::post('/payment/{invoice}', 'PaymentController@makePayment')->name('payment');

    Route::get('/paymentconfirmation', 'PaymentController@paymentconfirmation')->name('pesapal');

//    Route::delete('/invoice/{invoice}', 'PaymentController@removeInvoice')->name('remove_invoice');

    Route::post('/invoice/delete/{invoice}', 'PaymentController@removeInvoice')->name('remove_invoice');





});
