<?php

class UsuariosController extends AppController {

var $name = 'usuarios';
    public function login() { }

    public function logout() {
        // Redireciona o usuário para o action do logoutRedirect
        $this->redirect($this->Auth->logout());
    }

}
