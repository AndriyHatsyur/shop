<?php

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;
use Phalcon\Config\Adapter\Ini as ConfigIni;

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

// Registering the view component
$di->set(
    'view',
    function () use ($config) {
        $view = new View();

        $view->setViewsDir($config->phalcon->viewsDir);

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