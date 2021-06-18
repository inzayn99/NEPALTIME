<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::any('/', 'ApplicationController@index')->name('index');
    Route::any('/contact', 'ApplicationController@contact')->name('contact');

});
