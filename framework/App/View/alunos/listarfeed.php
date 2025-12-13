<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Mensagem</th>
        <th>Ações</th>

    </tr>
    <?php foreach ($this->GetView()->feed as $dado){ ?>
        <tr>
            <td><?php echo $dado->__get('fb_id'); ?></td>
            <td><?php echo $dado->__get('fb_nome'); ?></td>
            <td><?php echo $dado->__get('fb_email'); ?></td>
            <td><?php echo $dado->__get('fb_mensagem'); ?></td>
            <td>
                <a href="/feed/editar/feedback/<?php echo $dado->__get('fb_id'); ?>">Editar</a> / <a href="/Feed/excluir/feedback/<?php echo $dado->__get('fb_id'); ?>">Excluir</a>
        

 </tr>
        <?php } ?>
</table>