<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {

    $routes->connect('/', ['controller' => 'StaticPages', 'action' => 'display', 'home']);

    $routes->connect('/Staticpages/*', ['controller' => 'StaticPages', 'action' => 'display']);

    $routes->connect('/', ['controller' => 'Images', 'action' => 'display']);
    $routes->connect('/category/*', ['controller' => 'Images', 'action' => 'display']);

    $routes->fallbacks(DashedRoute::class);
});
Router::prefix('admin', function ($routes) {
    $routes->fallbacks('DashedRoute');
});
