<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cpf</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Senha</th>
        <th>Ações</th>

    </tr>
    <?php foreach ($this->GetView()->login as $dado){ ?>
        <tr>
            <td><?php echo $dado->__get('pf_id'); ?></td>
            <td><?php echo $dado->__get('name'); ?></td>
            <td><?php echo $dado->__get('cpf'); ?></td>
            <td><?php echo $dado->__get('email'); ?></td>
            <td><?php echo $dado->__get('tel'); ?></td>
            <td><?php echo $dado->__get('senha'); ?></td>
            <td><a href="/login/editar/pessoafisica/<?php echo $dado->__get('pf_id'); ?>">Editar</a> / <a href="/cadastros/excluir/pessoafisica/<?php echo $dado->__get('pf_id'); ?>">Excluir</td>
        </tr>
        <?php } ?>
</table>