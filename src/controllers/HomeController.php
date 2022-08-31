<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $nome = 'Daniel Nishimura';

        $posts = [
            ['titulo' => 'Titulo para teste0', 'corpo' => 'Corpo testando0'],
            ['titulo' => 'Titulo para teste1', 'corpo' => 'Corpo testando1'],
            ['titulo' => 'Titulo para teste2', 'corpo' => 'Corpo testando2'],
            ['titulo' => 'Titulo para teste3', 'corpo' => 'Corpo testando3'],
            ['titulo' => 'Titulo para teste4', 'corpo' => 'Corpo testando4'],
            ['titulo' => 'Titulo para teste5', 'corpo' => 'Corpo testando5'],
            ['titulo' => 'Titulo para teste6', 'corpo' => 'Corpo testando6'],
        ];

        $this->render('home', [
            'nome' => $nome,
            'idade' => 45,
            'posts' => $posts
        ]);
    }

    public function fotos() {
        $this->render('fotos');
    }


    public function foto($parametros) {
        echo "Acessando a foto:".$parametros['id'];
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }
}