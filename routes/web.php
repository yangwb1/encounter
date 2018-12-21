<?php

Route::get('/', 'TopicsController@index')->name('root');
Route::get('/home', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
//商品
Route::get('/products', 'ProductsController@index')->name('products.index');

//Route::group(['middleware' => 'auth'], function() {
//
//    Route::group(['middleware' => 'activated'], function() {
//
//        Route::get('cart', 'CartController@index')->name('cart.index');
//    });
//});


Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);

Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');
Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');

Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');
Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');

Route::post('upload_image', 'UsersController@uploadImage')->name('users.upload_image');

Route::resource('topics', 'TopicsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);


Route::resource('categories', 'CategoriesController', ['only' => ['show']]);

Route::post('upload_image', 'TopicsController@uploadImage')->name('topics.upload_image');

Route::get('topics/{topic}/{slug?}', 'TopicsController@show')->name('topics.show');

Route::resource('replies', 'RepliesController', ['only' => ['store', 'destroy']]);

//回复通知
Route::resource('notifications', 'NotificationsController', ['only' => ['index']]);

//用户收货地址
Route::get('user_addresses', 'UserAddressesController@index')->name('users.user_addresses.index');
Route::get('user_addresses/create', 'UserAddressesController@create')->name('users.user_addresses.create');
Route::post('user_addresses', 'UserAddressesController@store')->name('users.user_addresses.store');
Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('users.user_addresses.edit');
Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('users.user_addresses.update');
Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('users.user_addresses.destroy');


//Route::get('products/{product}', 'ProductsController@show')->name('products.show');

//收藏商品
Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
//取消收藏商品
Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
//收藏话题
Route::post('topics/{topic}/favorite', 'TopicsController@favor')->name('topics.favor');
//取消收藏话题
Route::delete('topics/{topic}/favorite', 'TopicsController@disfavor')->name('topics.disfavor');

Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
Route::get('topics/favorites', 'TopicsController@favorites')->name('topics.favorites');
Route::post('cart', 'CartController@add')->name('cart.add');
Route::get('cart', 'CartController@index')->name('cart.index');
Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

//订单
Route::post('orders', 'OrdersController@store')->name('orders.store');
Route::get('orders', 'OrdersController@index')->name('orders.index');

Route::get('products/{product}', 'ProductsController@show')->name('products.show');