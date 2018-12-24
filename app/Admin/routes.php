<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    //用户列表
    $router->get('users', 'UsersController@index');
    //商品列表
    $router->get('products', 'ProductsController@index');
    //创建商品
    $router->get('products/create', 'ProductsController@create');
    $router->post('products', 'ProductsController@store');
    //编辑商品
    $router->get('products/{id}/edit', 'ProductsController@edit');
    $router->put('products/{id}', 'ProductsController@update');

    //订单
    $router->get('orders', 'OrdersController@index')->name('admin.orders.index');
    //订单详情页
    $router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show');
    //物流
    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship');


});
