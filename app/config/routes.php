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


$router->notFound(
    [
        'controller' => 'index',
        'action'     => 'route404',
    ]
);
