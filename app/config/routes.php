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
    '/login',
    [
        'controller' => 'index',
        'action'     => 'test',
    ]
);

$router->add(
    '/install',
    [
        'controller' => 'index',
        'action'     => 'install',
    ]
);


$router->notFound(
    [
        'controller' => 'index',
        'action'     => 'route404',
    ]
);
