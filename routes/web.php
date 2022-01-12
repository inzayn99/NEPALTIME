<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::any('/', 'ApplicationController@index')->name('index');
    Route::any('/contact', 'ApplicationController@contact')->name('contact');
    Route::any('/magazine', 'ApplicationController@magazine')->name('magazine');
    Route::any('/404', 'ApplicationController@404')->name('404');
    Route::any('/aboutus', 'ApplicationController@aboutus')->name('aboutus');
    Route::any('/bussiness', 'ApplicationController@bussiness')->name('bussiness');
    Route::any('/advertise', 'ApplicationController@advertise')->name('advertise');
    Route::any('/politics', 'ApplicationController@politics')->name('politics');
    Route::any('/sports', 'ApplicationController@sports')->name('sports');
    Route::any('/travel', 'ApplicationController@travel')->name('travel');
    Route::any('/events', 'ApplicationController@events')->name('events');
    Route::any('/art', 'ApplicationController@art')->name('art');



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

    Route::group(['prefix' => 'Post'], function () {
        Route::any('/', 'PostController@index')->name('post');
        Route::any('/add-post', 'PostController@add')->name('add-post');
        Route::any('update-post-status', 'PostController@updateStatus')->name('update-post-status');
        Route::any('delete-post/{criteria?}', 'PostController@delete')->name('delete-post');
        Route::any('edit-post/{criteria?}', 'PostController@edit')->name('edit-post');
        Route::any('edit-post-action', 'PostController@editAction')->name('edit-post-action');

    });


//---------Video---------------------//
    Route::group(['prefix' => 'Videos'], function () {
        Route::any('/', 'VideosController@index')->name('post');
        Route::any('/add-videos', 'VideosController@add')->name('add-videos ');
        Route::any('update-videos-status', 'VideosController@updateStatus')->name('update-videos-status');
        Route::any('delete-videos/{criteria?}', 'VideosController@delete')->name('delete-videos');
        Route::any('edit-videos/{criteria?}', 'VideosController@edit')->name('edit-videos');
        Route::any('edit-videos-action', 'VideosController@editAction')->name('edit-videos-action');

    });
    //----------Footer--------------------------------//
    Route::group(['prefix' => 'Footer'], function () {
        Route::any('/', 'FooterController@index')->name('show-footer');
        Route::any('/add-footer', 'FooterController@add')->name('add-footer ');
        Route::any('update-footer-status', 'FooterController@updateStatus')->name('update-footer-status');
        Route::any('delete-footer/{criteria?}', 'FooterController@delete')->name('delete-footer');
        Route::any('edit-footer/{criteria?}', 'FooterController@edit')->name('edit-footer');
        Route::any('edit-footer-action', 'FooterController@editAction')->name('edit-footer-action');

    });

    Route::any('admin-logout', "AdminUserController@logout")->name('admin-logout');

});
