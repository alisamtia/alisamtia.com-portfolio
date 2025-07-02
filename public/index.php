<?php

use Core\Router;

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . "functions.php";

spl_autoload_register(function($class){
  $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
  return require base_path("{$class}.php");
});

$router=new Router();
require base_path("routes.php");
date_default_timezone_set('Asia/Karachi');


$request_uri=parse_url($_SERVER['REQUEST_URI'])['path'];
$request_method=$_POST["__request_method"] ?? $_SERVER['REQUEST_METHOD'];

$router->route($request_uri,$request_method);