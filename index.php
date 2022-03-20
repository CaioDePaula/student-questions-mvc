<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/autoload.php";
$routes = require __DIR__ . "/application/config/router.php";

$route = $routes['default'];
$path = isset($_SERVER['PATH_INFO'])? $_SERVER['PATH_INFO'] : null;
$requestMethod = isset($_SERVER['REQUEST_METHOD'])? $_SERVER['REQUEST_METHOD'] : 'index';
$requestMethod = strtolower($requestMethod);

if (!is_null($path) && array_key_exists($path, $routes)) {
    $route = $routes[$path];
}

session_start();

if ($requestMethod == 'get') {
    $requestMethod = 'index';
}

(new $route)->$requestMethod();
