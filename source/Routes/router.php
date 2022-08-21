<?php

namespace Source\Routes;
use CoffeeCode\Router\Router;

$router = new Router(URL);
$router->namespace("Source\Controllers");
$router->get('/', "Home:home");
$router->post('/send', "Home:send");

$router->dispatch();