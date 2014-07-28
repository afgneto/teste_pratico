<h4><?php echo $this->Html->link('Novo Compromisso', array('action' => 'cadastrar')); ?></h4>
<table>
    <tr>
        <th>Data</th>
        <th>T&iacute;tulo</th>
        <th>Descri&ccedil;&atilde;o</th>
        <th>A&ccedil;&otilde;es</th>
    </tr>
    <?php
    foreach ($compromissos as $compromisso) {
        ?>
        <tr>
            <td><?php echo $compromisso['Compromisso']['data_comp']; ?></td>
            <td><?php echo $compromisso['Compromisso']['titulo_comp']; ?></td>
            <td><?php echo $compromisso['Compromisso']['desc_comp']; ?></td>
            <td><?php echo $this->Html->link('Editar', array('action' => 'editar', $compromisso['Compromisso']['id'])); ?>
                | <?php echo $this->Html->link(
                    'Excluir', array(
                        'action' => 'excluir',
                        $compromisso['Compromisso']['id']), array('confirm' => 'Você tem certeza que quer excluir este usuário?')
                ); ?></td>
        </tr>
    <?php
    }
    ?>
</table>