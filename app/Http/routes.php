<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', ['as' => 'dashboard_path', 'uses' => 'UsersController@getDashboard', 'middleware' => ['auth']]);
Route::get('users', ['as' => 'all_users_path', 'uses' => 'UsersController@getIndex', 'middleware' => ['auth']]);
Route::get('users/add', ['as' => 'add_user_path', 'uses' => 'UsersController@getAddUser', 'middleware' => ['auth', 'admin']]);
Route::get('roles', ['as' => 'all_roles_path', 'uses' => 'UsersController@getRoles', 'middleware' => ['auth']]);
Route::get('permissions', ['as' => 'all_permissions_path', 'uses' => 'UsersController@getPermissions', 'middleware' => ['auth']]);


// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');