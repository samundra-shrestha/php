<?php

// namespace Core;

$routes = require base_path(('routes.php'));
$URI = parse_url($_SERVER['REQUEST_URI'])['path'];

// if ($URI === '/') {
//     require 'controllers/index.php';
// } 
// else if ($URI === '/about') {
//     require 'controllers/about.php';
// }
// else if ($URI === '/contact') {
//     require 'controllers/contact.php';
// }
// else{
//     echo '404 - Page Not Found';
// }




// dd($_SERVER);


function routesToController($URI, $routes)
{
    if (array_key_exists($URI, $routes)) {
        require base_path($routes[$URI]);
    } else {
        abort();
       
    }
}

function abort($code = 404){
    http_response_code($code);
    require base_path( "views/{$code}.php");
    die();
}

routesToController($URI, $routes);
