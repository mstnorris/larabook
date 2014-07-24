<?php

Event::listen('Larabook.Registration.Events.UserRegistered', function () {
    echo 'send user registered notification email';
});

Route::get('/', [
    'as'   => 'home',
    'uses' => 'PagesController@home'
]);


Route::get('register', [
    'as'   => 'register_path',
    'uses' => 'RegistrationController@create'
]);

Route::post('register', [
    'as'   => 'register_path',
    'uses' => 'RegistrationController@store'
]);

/**
 * Sessions
 */
Route::get('login', [
    'as'   => 'login_path',
    'uses' => 'SessionsController@create'
]);

Route::post('login', [
    'as'   => 'login_path',
    'uses' => 'SessionsController@store'
]);

Route::get('logout', [
    'as'   => 'logout_path',
    'uses' => 'SessionsController@destroy'
]);

/**
 * Statuses
 */

Route::get('statuses', [
    'as'   => 'statuses_path',
    'uses' => 'StatusesController@index'
])->before('auth');

Route::post('statuses', [
    'as'   => 'statuses_path',
    'uses' => 'StatusesController@store'
])->before('auth');

/**
 * Users
 */
Route::get('users', [
    'as'   => 'users_path',
    'uses' => 'UsersController@index'
]);

/**
 * Profiles
 */

Route::get('@{username}', [
    'as'   => 'profile_path',
    'uses' => 'UsersController@show'
]);