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
    '/signup',
    [
        'controller' => 'user',
        'action'     => 'signup',
    ]
);

$router->add(
    '/login',
    [
        'controller' => 'user',
        'action'     => 'login',
    ]
);

$router->add(
    '/logout',
    [
        'controller' => 'user',
        'action'     => 'logout',
    ]
);

$router->add(
    '/staty-predstavnykom',
    [
        'controller' => 'pages',
        'action'     => 'statyPredstavnykom',
    ]
);

$router->add(
    '/shop',
    [
        'controller' => 'shop',
        'action'     => 'index',
    ]
);

$router->add(
    '/shop/product/:params',
    [
        'controller' => 'shop',
        'action'     => 'product',
        'link'      => 1,

    ]
);

$router->add(
    '/shop/category/:params',
    [
        'controller' => 'shop',
        'action'     => 'category',
        'link'      => 1,

    ]
);

$router->add(
    '/shop/cart/add',
    [
        'controller' => 'cart',
        'action'     => 'add',

    ]
);

$router->add(
    '/shop/cart/send-order',
    [
        'controller' => 'cart',
        'action'     => 'sendOrder',

    ]
);

$router->add(
    '/shop/cart/delete',
    [
        'controller' => 'cart',
        'action'     => 'delete',

    ]
);

$router->add(
    '/shop/cart/edit',
    [
        'controller' => 'cart',
        'action'     => 'edit',

    ]
);

$router->add(
    '/shop/cart',
    [
        'controller' => 'cart',
        'action'     => 'index',

    ]
);

$router->add(
    '/user',
    [
        'controller' => 'user',
        'action'     => 'index',
    ]
);

$router->add(
    '/user/change-password',
    [
        'controller' => 'user',
        'action'     => 'changePassword',
    ]
);

$router->add(
    '/user/reset-password',
    [
        'controller' => 'user',
        'action'     => 'resetPassword',
    ]
);

$router->add(
    '/user/orders',
    [
        'controller' => 'user',
        'action'     => 'orders',
    ]
);

$router->add(
    '/user/order/{id:[0-9]+}',
    [
        'controller' => 'user',
        'action'     => 'order',
    ]
);

$router->add(
    '/admin/orders',
    [
        'controller' => 'admin_Order',
        'action'     => 'index',
    ]
);

$router->add(
    '/admin/order/{id:[0-9]+}',
    [
        'controller' => 'admin_Order',
        'action'     => 'order',
    ]
);

$router->add(
    '/admin/message',
    [
        'controller' => 'admin_Message',
        'action'     => 'index',
    ]
);

$router->add(
    '/admin/message/delete',
    [
        'controller' => 'admin_Message',
        'action'     => 'delete',
    ]
);

$router->add(
    '/admin/message/view/{id:[0-9]+}',
    [
        'controller' => 'admin_Message',
        'action'     => 'view',
    ]
);

$router->add(
    '/admin/representative',
    [
        'controller' => 'admin_Representative',
        'action'     => 'index',
    ]
);

$router->add(
    '/admin/representative/delete',
    [
        'controller' => 'admin_Representative',
        'action'     => 'delete',
    ]
);

$router->add(
    '/admin/representative/view/{id:[0-9]+}',
    [
        'controller' => 'admin_Representative',
        'action'     => 'view',
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
