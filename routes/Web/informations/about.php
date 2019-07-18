<?php

Route::group([
    'namespace' => 'Information',
], function() {



    Route::group([ 'prefix' => 'information',  'as' => 'information.'], function() {

        Route::get('/about_us', 'AboutController@showAboutUs')->name('about_us');

    });
});

