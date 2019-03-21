<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('users',UserController::class);
    $router->resource('carName',carNameController::class);
    $router->resource('carType',carTypeController::class);
    $router->resource('warehouse',WarehouseController::class);

});

