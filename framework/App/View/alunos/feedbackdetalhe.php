<div class="container-fluid">
    <h2>🔍 Detalhes do Feedback</h2>
    <a href="/feedback/listar" class="btn btn-secondary mb-4">
        &laquo; Voltar para a Lista
    </a>

    <?php 
    $feedback = $this->view->feedback ?? null;
    
    if ($feedback): 
    ?>
    
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                Feedback #<?php echo $feedback->__get('fb_id'); ?>
            </div>
            <div class="card-body">
                
                <h5 class="card-title"><?php echo $feedback->__get('fb_nome'); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $feedback->__get('fb_email'); ?></h6>
                
                <hr>

                <p class="card-text">
                    <strong>Avaliação:</strong> 
                    <?php for ($i = 0; $i < $feedback->__get('fb_rating'); $i++) { echo '⭐'; } ?>
                    (<?php echo $feedback->__get('fb_rating'); ?> de 5)
                </p>

                <p class="card-text">
                    <strong>Mensagem:</strong><br>
                    <blockquote class="blockquote border-left pl-3 pt-1">
                        <?php echo nl2br(htmlspecialchars($feedback->__get('fb_mensagem'))); ?>
                    </blockquote>
                </p>

                <p class="card-text">
                    <small class="text-muted">Enviado em: <?php echo date('d/m/Y \à\s H:i', strtotime($feedback->__get('fb_data'))); ?></small>
                </p>
                
            </div>
            <div class="card-footer">
                 <a href="#" 
                   onclick="if(confirm('Tem certeza que deseja excluir este feedback?')){ window.location.href='/feedback/excluir/<?php echo $feedback->__get('fb_id'); ?>'; }"
                   class="btn btn-danger">
                    Excluir
                </a>
            </div>
        </div>

    <?php else: ?>
        <div class="alert alert-danger" role="alert">
            Feedback não encontrado ou ID inválido.
        </div>
    <?php endif; ?>
</div>