<?php
Auth::routes();

Route::get('/', 'HomeController@home');

Route::get('/home', 'HomeController@home')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::resource('users', 'Admin\UserController');
    Route::resource('roles', 'Admin\RoleController');
    Route::resource('permissions', 'Admin\PermissionController');
    Route::resource('clients', 'Admin\ClientController');
});


