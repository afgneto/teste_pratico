<?php
echo $this->Form->create('Compromisso');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('Usuario.id', array('type' => 'hidden'));
echo $this->Form->input('data_comp', array('label' => 'Data'));
echo $this->Form->input('titulo_comp', array('label' => 'T&iacute;tulo'));
?><label>Descricao</label><?
echo $this->Form->textarea('desc_comp');
echo $this->Form->input('Alterar', array('type' => 'submit', 'label' => false));
echo $this->Form->end();
?>