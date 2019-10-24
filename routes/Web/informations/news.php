<?php

Route::group([
    'namespace' => 'Information',
], function() {



    Route::group([ 'prefix' => 'news',  'as' => 'news.'], function() {

        Route::get('/search', 'NewsController@search')->name('search');
        Route::get('/show/{slug}','NewsController@show')->name('show');
        Route::post('/search','NewsController@searchResult')->name('search');

    });
});

