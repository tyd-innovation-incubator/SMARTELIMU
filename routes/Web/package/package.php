<?php

Route::group([
    'namespace' => 'Package',
], function() {



    Route::group([ 'prefix' => 'package',  'as' => 'package.'], function() {

        Route::get('/create_invoice/{package}', 'PackageController@createInvoice')->name('create_invoice');
        Route::get('/invoice_profile/{invoice}', 'PackageController@invoiceProfile')->name('invoice_profile');

//        Route::post('/store_invoice', 'PackageController@createInvoice')->name('store_invoice');



    });
});