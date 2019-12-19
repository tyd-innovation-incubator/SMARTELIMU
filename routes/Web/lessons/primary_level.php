<?php

Route::group([
    'namespace' => 'Lessons',
], function() {



    Route::group([ 'prefix' => 'lessons',  'as' => 'lessons.'], function() {

        Route::get('/primary', 'PrimaryLevelController@index')->name('primary');

        Route::get('/view/{uuid}', 'PrimaryLevelController@view')->name('view');

        Route::post('/search', 'PrimaryLevelController@search')->name('search');


    });
});

