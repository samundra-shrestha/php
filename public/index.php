<?php

const BASE_PATH = __DIR__ . '/../';

// var_dump(BASE_PATH);

require BASE_PATH . 'Core/functions.php';


spl_autoload_register(function ($class) {
    // var_dump(base_path($class . '.php'));

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

// require base_path('Core/router.php');
$router = new \Core\Router();

$routes = require base_path(('routes.php'));
$URI = parse_url($_SERVER['REQUEST_URI'])['path'];


$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($URI, $method);
