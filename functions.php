<?php

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

function authorize($condition, $status= Response::FORBIDDEN)
{
    if ($condition) {
        abort($status);
    }
}

function base_path($path){
    return BASE_PATH. $path;
}

function view($path){
    return  base_path("views/". $path);
}