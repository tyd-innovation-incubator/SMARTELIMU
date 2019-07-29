<?php

Route::group([
    'namespace' => 'Lessons',
], function() {



    Route::group([ 'prefix' => 'lessons',  'as' => 'lessons.'], function() {

        Route::get('/extra_secondary', 'ExtraSecondaryLevelController@index')->name('extra_secondary');

    });
});

