<?php
require_once \dirname(__DIR__) . "/bootstrap.php";

$config = \Resonantcore\Lib\Utility::getSON(ONIMBUS_ROOT . "/config/config.json");

$router = \Onionimbus\System\Router(
    \Resonantcore\Lib\Utility::getJSON(ONIMBUS_ROOT . "/config/routes.json")
);

// Set anything else up here...


// Now, let's fire off the router

$router->serve();
