<?php

class UsuariosController extends AppController {

var $name = 'usuarios';
    public function login() { }

    public function logout() {
        // Redireciona o usu�rio para o action do logoutRedirect
        $this->redirect($this->Auth->logout());
    }

}
