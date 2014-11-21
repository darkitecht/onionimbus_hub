<?php
require_once \dirname(__DIR__) . "/bootstrap.php";

$config = \Resonantcore\Lib\Utility::getJSON(ONIMBUS_ROOT . "/config/config.json");

$router = \Onionimbus\System\Router(
    \Resonantcore\Lib\Utility::getJSON(ONIMBUS_ROOT . "/config/routes.json")
);

// Set anything else up here...

$router->inject(
    'database',
    new \Resonantcore\Lib\DB(

    )
);

// Now, let's fire off the router

$router->serve();
