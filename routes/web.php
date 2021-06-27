<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::any('/', 'ApplicationController@index')->name('index');
    Route::any('/contact', 'ApplicationController@contact')->name('contact');

});


Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function () {
    Route::any('/', 'DashboardController@index')->name('admin');


    Route::group(['prefix' => 'admin-users'], function () {
        Route::any('/', 'AdminUserController@index')->name('admin-users');
        Route::any('/add-admin-user', 'AdminUserController@add')->name('add-admin-user');
        Route::any('update-admin-status','AdminUserController@updateStatus')->name('update-admin-status');
        Route::any('update-admin-type','AdminUserController@updateAdminType')->name('update-admin-type');




    });


});
