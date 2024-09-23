<?php

use Core\Response;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value ?
        'bg-gray-900 text-white' :
        'hover:bg-gray-700 hover:text-white hover:bg-gray-700 hover:text-white text-gray-300';
}

function  abort($code = 404)
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
    return true;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attribute = [])
{
    extract($attribute);
    require  base_path("views/" . $path);
}


function redirect($path)
{
    header("location: {$path}");
    exit();
}


function old($key, $default = '')
{
    return Core\Session::get('old')[$key] ?? $default;
}
