<?php

Route::get('/','StaticPagesController@home')->name('home');//首页
Route::get('/help','StaticPagesController@help')->name('help');//帮助
Route::get('/about','StaticPagesController@about')->name('about');//关于

Route::get('/signup','UsersController@create')->name('signup');//注册

