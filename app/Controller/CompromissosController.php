<?php
class CompromissosController extends AppController {
	
	var $scaffold; //Gerando CRUD Simples Com Scafffold
	public $helpers = array("Form", "Html");


	public function index() {
   	$this->redirect('/compromissos/exibir');
	}

	public function exibir(){
	// Titulo da Pagina onde serão exibidos os compromissos
	$this->set('title', 'Exibir Compromissos');
	//Buscar todos os registros no BD atraves do metodo do Model Compromisso(find)
	$compromissos = $this->Compromisso->find('all');
	//enviando registro para o template
	$this->set('compromissos', $compromissos);
	}


}