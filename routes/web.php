<?php

Route::get('/','StaticPagesController@home')->name('home');//首页
Route::get('/help','StaticPagesController@help')->name('help');//帮助
Route::get('/about','StaticPagesController@about')->name('about');//关于

Route::get('/signup','UsersController@create')->name('signup');//注册

Route::resource('users','UsersController');//等同下面7條路由
//Route::get('/users', 'UsersController@index')->name('users.index');
//Route::get('/users/create', 'UsersController@create')->name('users.create');
//Route::get('/users/{user}', 'UsersController@show')->name('users.show');
//Route::post('/users', 'UsersController@store')->name('users.store');
//Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
//Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
//Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');

Route::get('login','SessionsController@create')->name('login');//会话路由
Route::post('login','SessionsController@create')->name('login');
Route::delete('logout','SessionsController@create')->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
