<?php

Route::group([
    'namespace' => 'Lessons',
], function() {



    Route::group([ 'prefix' => 'lessons',  'as' => 'lessons.'], function() {

        Route::get('/extra_primary', 'ExtraPrimaryLevelController@index')->name('extra_primary');

    });
});

