<?php

Route::group([
    'namespace' => 'Information',
], function() {



    Route::group([ 'prefix' => 'information',  'as' => 'information.'], function() {

        Route::get('/contact_us', 'ContactController@contactUs')->name('contact_us');

    });
});

