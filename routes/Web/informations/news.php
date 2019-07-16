<?php

Route::group([
    'namespace' => 'Information',
], function() {



    Route::group([ 'prefix' => 'news',  'as' => 'news.'], function() {

        Route::get('/search', 'NewsController@search')->name('search');

    });
});

