<?php
require_once \dirname(__DIR__) . "/bootstrap.php";

$config = \Resonantcore\Lib\Utility::getJSON(ONIMBUS_ROOT . "/config/config.json");

$router = \Onionimbus\System\Router(
    \Resonantcore\Lib\Utility::getJSON(ONIMBUS_ROOT . "/config/routes.json")
);

// Set anything else up here...
if (!empty($config['database'])) {
    $db = isset($config['database']['default'])
        ? $config['database']
        : \array_shift(\array_values($config['database']));
}

// Inject DB
$router->inject(
    'database',
    new \Resonantcore\Lib\DB(
        'pgsql;host='.$db['host'].';dbname='.$db['database'],
        $db['username'],
        $db['password']
    )
);



// Now, let's fire off the router

$router->serve();
