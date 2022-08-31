<?php
namespace src\controllers;

use \core\Controller;
use src\models\Usuario;

class UsuariosController extends Controller {

    public function add() {
      $this->render('add');
    }

    public function addAction() {
      $name = filter_input(INPUT_POST, 'name');
      $email = filter_input(INPUT_POST, 'email');
      
      #Usando Hydrahon query builder library
      if($name && $email) {
        $data = Usuario::select()->where('email', $email)->execute();

        if(count($data) === 0) {
          //se nao achar o email cadastrado-> insere
          Usuario::insert([
            'nome' => $name,
            'email' => $email 
          ])->execute();
          //aqui automaticamente da um exit
          $this->redirect('/');
        } 

      }
      //redirect para /novo
      $this->redirect('/novo');
    }

    public function edit($args) {

    }

    public function del($args) {
      
    }
  }