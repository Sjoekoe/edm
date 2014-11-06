<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

/** Creating a subscription */
Route::get('join', ['as' => 'join', 'uses' => 'PagesController@join'])->before('guest');
Route::get('signup', ['as' => 'signup', 'uses' => 'AccountController@create'])->before('guest');
Route::post('subscriptions', ['as' => 'subscribed', 'uses' => 'AccountController@store'])->before('csrf');

/** Sessions */
Route::get('login', ['as' => 'sessions.create', 'uses' => 'SessionsController@create'])->before('guest');
Route::post('login', ['as' => 'sessions.store', 'uses' => 'SessionsController@store'])->before('csrf');
Route::get('logout', ['as' => 'sessions.destroy', 'uses' => 'SessionsController@destroy'])->before('auth');

/** Admin */
Route::get('admin/dashboard', ['as' => 'admin.index', 'uses' => 'AdminController@index'] )->before('role:Administrator');

/** Artists */
Route::get('admin/artists', ['as' => 'artist.index', 'uses' => 'ArtistsController@index'])->before('role:Administrator');
Route::get('admin/artist/create', ['as' => 'artist.create', 'uses' => 'ArtistsController@create'])->before('role:Administrator');
Route::post('admin/artist/create', ['as' => 'artist.store', 'uses' => 'ArtistsController@store'])->before('csrf|role:Administrator');

/** Series -> Admin */
Route::get('admin/series', ['as' => 'series.index', 'uses' => 'SeriesController@index'])->before('role:Administrator');
Route::get('admin/series/create', ['as' => 'series.create', 'uses' => 'SeriesController@create'])->before('role:Administrator');
Route::post('admin/series/create', ['as' => 'series.store', 'uses' => 'SeriesController@store'])->before('csrf|role:Administrator');

/** Users -> adminpages */
Route::get('admin/users', ['as' => 'users.index', 'uses' => 'UsersController@index'])->before('role:Administrator');

/** users */
Route::get('@{username}', ['as' => 'users.show', 'uses' => 'UsersController@show']);

/** Password Reminder */
Route::controller('password', 'RemindersController');

/** Profiles */
Route::get('@{username}/edit', ['as' => 'profiles.edit', 'uses' => 'ProfilesController@edit'])->before('auth');
Route::put('@{username}/edit', ['as' => 'profiles.update', 'uses' => 'ProfilesController@update'])->before('auth|csrf');