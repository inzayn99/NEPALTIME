<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::any('/', 'ApplicationController@index')->name('index');
    Route::any('/contact', 'ApplicationController@contact')->name('contact');


    Route::any('login', 'ApplicationController@login')->name('login');


   /*Login And logout*/
    Route::group(['prefix' => 'users','middleware'=>'auth:web'], function () {
        Route::any('/', 'ApplicationController@user')->name('users');
        Route::any('/logout', 'ApplicationController@logout')->name('logout');


    });
/*End Login And Logout*/
});

Route::group(['namespace' => 'Backend'], function () {
    Route::any('admin-login', 'AdminUserController@login')->name('admin-login');

});


Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::any('/', 'DashboardController@index')->name('admin');


    Route::group(['prefix' => 'admin-users'], function () {
        Route::any('/', 'AdminUserController@index')->name('admin-users');
        Route::any('/add-admin-user', 'AdminUserController@add')->name('add-admin-user');
        Route::any('update-admin-status', 'AdminUserController@updateStatus')->name('update-admin-status');
        Route::any('update-admin-type', 'AdminUserController@updateAdminType')->name('update-admin-type');
        Route::any('delete-admin-user/{criteria?}', 'AdminUserController@delete')->name('delete-admin-user');

        Route::any('edit-admin-user/{criteria?}', 'AdminUserController@edit')->name('edit-admin-user');
        Route::any('edit-admin-user-action', 'AdminUserController@editAction')->name('edit-admin-user-action');


    });

    Route::group(['prefix' => 'category'], function () {
        Route::any('/', 'CategoryController@index')->name('category');
        Route::any('/add-category', 'CategoryController@add')->name('add-category');
        Route::any('update-category-status', 'CategoryController@updateStatus')->name('update-category-status');
        Route::any('delete-category/{criteria?}', 'CategoryController@delete')->name('delete-category');
        Route::any('edit-category/{criteria?}', 'CategoryController@edit')->name('edit-category');
        Route::any('edit-category-action', 'CategoryController@editAction')->name('edit-category-action');





    });

        Route::any('admin-logout', "AdminUserController@logout")->name('admin-logout');

});
