<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Senha</th>
        
        <th>Ações</th>

    </tr>
    <?php foreach ($this->GetView()->entrar as $dado){ ?>
        <tr>
            <td><?php echo $dado->__get('usu_id'); ?></td>
            <td><?php echo $dado->__get('usu_email'); ?></td>
            <td><?php echo $dado->__get('usu_password'); ?></td>
            <td>
                <a href="/entrar/editar/usuario/<?php echo $dado->__get('usu_id'); ?>">Editar</a> / <a href="/entrar/excluir/usuario/<?php echo $dado->__get('usu_id'); ?>">Excluir</a>
            </td>   

 </tr>
        <?php } ?>
</table>    