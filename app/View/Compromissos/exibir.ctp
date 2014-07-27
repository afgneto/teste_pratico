<html>
<head></head>
<title></title>
<body>
<p align="center"><font size="6">Lista de Compromissos</font></p>
<p>
<?=$this->Html->link('Novo Compromisso', '/compromissos/add')?>
<table width="100%" cellspacing="0" cellpadding="0">
<tr bgcolor="#F0F0F0">
	<td>Data</td>
	<td>Titulo</td>
	<td>Prioridade</td>
	<td>Status</td>
	<td>Operações</td>
</tr>

<?php foreach ( $compromissos as $compromisso ){ ?>
	<tr>
	<td><?=$compromisso['Compromisso']['data_comp']?></td>
	<td><?=$compromisso['Compromisso']['titulo_comp']?></td>
	<td><?=$compromisso['Compromisso']['id_prioridade']?></td>
	<td><?=$compromisso['Compromisso']['id_status']?></td>
	<td>
		<?=$this->Html->link('Visualizar', '/compromissos/view/'.$compromisso['Compromisso']['id'])?>
		<?=$this->Html->link('Editar', '/compromissos/edit/'.$compromisso['Compromisso']['id'])?>
		<?=$this->Html->link('Deletar', '/compromissos/delete/'.$compromisso['Compromisso']['id'])?>
	</td>
</tr>
<?php } ?>


</body>

</html>