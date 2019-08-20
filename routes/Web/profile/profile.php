<?php

Route::group([
    'namespace' => 'Profile',
], function() {



    Route::group([ 'prefix' => 'profile',  'as' => 'profile.'], function() {

        Route::get('/index', 'ProfileController@index')->name('index');
        Route::get('/packages', 'ProfileController@packages')->name('packages');


    });
});

