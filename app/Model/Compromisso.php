<?php
// Classe Compromisso Herdando da App Model

class Compromisso extends AppModel {
	public $userTable = 'compromissos';

	public $belongsTo = array('Usuario' => array('className' => 'Usuario',
'foreignKey' => 'usuario_id', 'conditions' => array(), 'fields' => array('Usuario.id', 'Usuario.nome_usuario')));

}

?>