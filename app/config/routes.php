<?php

use Phalcon\Mvc\Router;

$router = new Router(false);

$router->add(
    '/install',
    [
        'controller' => 'index',
        'action'     => 'install',
    ]
);

$router->add(
    '/',
    [
        'controller' => 'pages',
        'action'     => 'index',
    ]
);

$router->add(
    '/contact',
    [
        'controller' => 'pages',
        'action'     => 'contact',
    ]
);

$router->add(
    '/statu-predstavnukom',
    [
        'controller' => 'pages',
        'action'     => 'statuPredstavnukom',
    ]
);

$router->add(
    '/admin/category',
    [
        'controller' => 'admin_Category',
        'action'     => 'index',
    ]
);

$router->add(
    '/admin/category/add',
    [
        'controller' => 'admin_Category',
        'action'     => 'add',
    ]
);

$router->add(
    '/admin/category/delete',
    [
        'controller' => 'admin_Category',
        'action'     => 'delete',
    ]
);

$router->add(
    '/admin/category/edit/{id:[0-9]+}',
    [
        'controller' => 'admin_Category',
        'action'     => 'edit',
    ]
);

$router->add(
    '/admin/product',
    [
        'controller' => 'admin_Product',
        'action'     => 'index',
    ]
);


$router->add(
    '/admin/product/add',
    [
        'controller' => 'admin_Product',
        'action'     => 'add',
    ]
);

$router->add(
    '/admin/product/delete',
    [
        'controller' => 'admin_Product',
        'action'     => 'delete',
    ]
);

$router->add(
    '/admin/product/edit/{id:[0-9]+}',
    [
        'controller' => 'admin_Product',
        'action'     => 'edit',
    ]
);

$router->add(
    '/admin/login',
    [
        'controller' => 'session',
        'action'     => 'login',
    ]
);

$router->add(
    '/admin/logout',
    [
        'controller' => 'session',
        'action'     => 'logout',
    ]
);

$router->add(
    '/admin',
    [
        'controller' => 'admin',
        'action'     => 'index',
    ]
);


$router->notFound(
    [
        'controller' => 'pages',
        'action'     => 'route404',
    ]
);
