<?php

Route::group([
    'namespace' => 'Lessons',
], function() {



    Route::group([ 'prefix' => 'lessons',  'as' => 'lessons.'], function() {

        Route::get('/secondary', 'SecondaryLevelController@index')->name('secondary');
//        Route::get('/view/{uuid}', 'SecondaryLevelController@view')->name('view_secondary');


    });
});

