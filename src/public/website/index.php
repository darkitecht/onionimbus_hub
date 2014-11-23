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


// Let's initialize a loader
$loader = new \Twig_Loader_Filesystem([ ONIMBUS_ROOT."/templates/" ]);

// Now let's set up our Twig Environment
if (!empty($config['templates']['cache'])) {
    $twigEnv = new \Twig_Environment(
        $loader,
        [ 'cache' => $cache ]
    );
} else {
    $twigEnv = new \Twig_Environment($loader);
}

// Inject our template engine
$router->inject('template', $twigEnv);

// Now, let's fire off the router

$router->serve();
