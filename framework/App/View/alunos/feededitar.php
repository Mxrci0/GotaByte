<section class="feedback-section">
    <h2>Deixe seu Feedback</h2>

    <form class="feedback-form" id="feedbackForm" method="POST" action="/feed/alterar">

        <div class="form-group">
            <label for="fb_nome">Nome:</label>
            <input type="text" id="fb_nome" name="fb_nome"value="<?= $this->GetView()->feed->__get('fb_nome') ?>" required>
        </div>

        <div class="form-group">
            <label for="fb_email">Email:</label>
            <input type="email" id="fb_email" name="fb_email" value="<?= $this->GetView()->feed->__get('fb_email') ?>" required>
        </div>

        <div class="form-group">
            <label for="fb_mensagem">Mensagem:</label>
            <textarea id="fb_mensagem" name="fb_mensagem"  value="<?= $this->GetView()->feed->__get('fb_mensagem') ?>"required></textarea>
        </div>

        <input type="hidden" name="fb_id" value="<?= $this->GetView()->feed->__get('fb_id') ?>">
        <button type="submit">Enviar Feedback</button>
    </form>
</section>

<div class="feedback-list" id="feedbackList">
    <!-- Feedbacks serão exibidos aqui -->
</div>
