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
    '/admin/category/remove-{idRemove:[0-9]+}',
    [
        'controller' => 'admin',
        'action'     => 'category',
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
