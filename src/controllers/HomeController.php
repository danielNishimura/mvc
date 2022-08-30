<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'Daniel Nishimura']);
    }

    public function fotos() {
        $this->render('fotos');
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}