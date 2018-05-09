<?php

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Config\Adapter\Ini as ConfigIni;
use Phalcon\Flash\Direct as FlashDirect;
use Phalcon\Flash\Session as FlashSession;
use Phalcon\Session\Adapter\Files as Session;



$config = new ConfigIni('../app/config/config.ini');

$loader = new Loader();

$loader->registerDirs(
    [
        $config->phalcon->controllersDir,
        $config->phalcon->modelsDir,
        $config->phalcon->pluginsDir,
    ]
);

$loader->register();

$di = new FactoryDefault();

$di->setShared(
    'session',
    function () {
        $session = new Session();

        $session->start();

        return $session;
    }
);

// Database connection is created based on the parameters defined in the configuration file
$di->set('db', function() use ($config) {
    return new \Phalcon\Db\Adapter\Pdo\Mysql(
        [
            'host' => $config->database->host,
            'username' => $config->database->username,
            'password' => $config->database->password,
            'dbname' => $config->database->dbname,
            'options'  => [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
                PDO::ATTR_CASE               => PDO::CASE_LOWER,
            ]
        ]
    );
});

// Register Volt as a service
$di->set(
    'voltService',
    function ($view, $di) {
        $volt = new Volt($view, $di);

        $volt->setOptions(
            [
                'compiledPath'      => '../app/compiled-templates/',
                'compiledExtension' => '.compiled',
            ]
        );

        return $volt;
    }
);

// Registering the view component
// Register Volt as template engine
$di->set(
    'view',
    function () use ($config) {
        $view = new View();

        $view->setViewsDir($config->phalcon->viewsDir);

        $view->registerEngines(
            [
                '.volt' => 'voltService',
            ]
        );    

        return $view;
    }
);

$di->set(
    'router',
    function () use ($config){
        require $config->phalcon->routesDir;

        return $router;
    }
);

$application = new Application($di);

try {
    $response = $application->handle();

    $response->send();
} catch (\Exception $e) {
    echo $e->getMessage();
}