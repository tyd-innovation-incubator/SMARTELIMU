<?php

Route::group([
    'namespace' => 'Profile',
], function() {



    Route::group([ 'prefix' => 'profile',  'as' => 'profile.'], function() {

        Route::get('/index', 'ProfileController@index')->name('index');

    });
});

