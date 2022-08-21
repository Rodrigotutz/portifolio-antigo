<?php

use MatthiasMullie\Minify\CSS;
use MatthiasMullie\Minify\JS;

$minify = filter_input(INPUT_GET, "minify", FILTER_VALIDATE_BOOL);

if($_SERVER["SERVER_NAME"] == "localhost" || $minify){
    $minCSS = new CSS();
    $minCSS->add(dirname(__DIR__, 1). "/views/assets/css/index.css");
    $minCSS->minify(dirname(__DIR__, 1). "/views/assets/style.min.css");

    $minJS = new JS();
    $minJS->add(dirname(__DIR__ ,1). "/views/assets/js/index.js");
    $minJS->minify(dirname(__DIR__,1) . "/views/assets/scripts.min.js");
}