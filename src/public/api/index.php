<?php
require_once \dirname(__DIR__) . "/bootstrap.php";

$config = \Resonantcore\Lib\Utility::parseJSON(ONIMBUS_ROOT . "/config/config.json");

$router = \Onionimbus\Hub\Wire\Router(
    \Resonantcore\Lib\Utility::parseJSON(ONIMBUS_ROOT . "/config/routes.json")
);

// Set anything else up here...


// Now, let's fire off the router

$router->serve();
