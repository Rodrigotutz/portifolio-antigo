<?php

namespace Source\Routes;
use CoffeeCode\Router\Router;

$router = new Router(getenv("APP_URL"));
$router->namespace("Source\Controllers");
$router->get('/', "Home:home", 'home.home');
$router->post('/send', "Home:send", "home.send");

$router->get("/error", "Error:index", "error.index");
$router->dispatch();

if($router->error()) {
    $router->redirect("error.index", [
        "errcode" => $router->error()
    ]);
}