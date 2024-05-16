<?php

namespace Source\Controllers;

use Rodrigotutz\Controller;

class Error extends Controller {
    public function __construct($router) {
        parent::__construct($router, dirname(__DIR__, 2). "/views");
    }

    public function index():void {
        $this->view->addData([
            'title' => 'Página não encontrada'
        ]);
        echo $this->view->render('error');
    }
}