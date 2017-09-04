<?php

use Phalcon\Mvc\Router;

$router = new Router(false);

$router->add(
    '/',
    [
        'controller' => 'index',
        'action'     => 'index',
    ]
);

$router->add(
    '/install',
    [
        'controller' => 'index',
        'action'     => 'install',
    ]
);

$router->add(
    '/contact',
    [
        'controller' => 'index',
        'action'     => 'contact',
    ]
);

$router->add(
    '/admin/category',
    [
        'controller' => 'admin',
        'action'     => 'category',
    ]
);

$router->add(
    '/admin/category/add',
    [
        'controller' => 'admin',
        'action'     => 'categoryAdd',
    ]
);

$router->add(
    '/admin/category/edit/{id:[0-9]+}',
    [
        'controller' => 'admin',
        'action'     => 'categoryEdit',
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
        'controller' => 'index',
        'action'     => 'route404',
    ]
);
