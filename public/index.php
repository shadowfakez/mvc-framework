<?php

//ini_set('display_errors', '1');


use framework\Application;
use framework\Components\Router\Router;

include_once __DIR__ . '/../vendor/autoload.php';

$app = new Application(new Router());

$app->run();

