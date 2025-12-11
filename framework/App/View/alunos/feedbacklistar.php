<div class="container-fluid">
    <h2>📋 Listagem de Feedbacks</h2>
    <p>Aqui você pode gerenciar todos os feedbacks recebidos.</p>

    <?php if (isset($this->view->feedbacks) && !empty($this->view->feedbacks)): ?>
    
        <table class="table table-striped table-hover mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Avaliação</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->view->feedbacks as $feedback): ?>
                <tr>
                    <td><?php echo $feedback->__get('fb_id'); ?></td>
                    <td><?php echo $feedback->__get('fb_nome'); ?></td>
                    <td><?php echo $feedback->__get('fb_email'); ?></td>
                    <td>
                        <?php 
                        // Exemplo: mostrar estrelas baseadas no rating
                        for ($i = 0; $i < $feedback->__get('fb_rating'); $i++) {
                            echo '⭐'; // Ou use um ícone de estrela de sua preferência
                        }
                        ?>
                    </td>
                    <td><?php echo date('d/m/Y H:i', strtotime($feedback->__get('fb_data'))); ?></td>
                    <td>
                        <a href="/feedback/consultar/<?php echo $feedback->__get('fb_id'); ?>" class="btn btn-sm btn-info">
                            Detalhes
                        </a>
                        
                        <a href="#" 
                           onclick="if(confirm('Tem certeza que deseja excluir o feedback de ID <?php echo $feedback->__get('fb_id'); ?>?')){ window.location.href='/feedback/excluir/<?php echo $feedback->__get('fb_id'); ?>'; }"
                           class="btn btn-sm btn-danger">
                            Excluir
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php else: ?>
        <div class="alert alert-warning mt-4" role="alert">
            Nenhum feedback encontrado.
        </div>
    <?php endif; ?>
</div>