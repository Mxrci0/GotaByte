<div class="container-fluid">
    <h2>📝 Enviar Novo Feedback</h2>
    <p>Preencha os campos abaixo para enviar sua avaliação e mensagem.</p>

    <form method="POST" action="/feedback/inserir">

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fb_nome" class="form-label">Seu Nome</label>
                <input type="text" 
                       class="form-control" 
                       id="fb_nome" 
                       name="fb_nome" 
                       placeholder="Digite seu nome completo" 
                       required>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="fb_email" class="form-label">Seu Email</label>
                <input type="email" 
                       class="form-control" 
                       id="fb_email" 
                       name="fb_email" 
                       placeholder="seu.email@exemplo.com" 
                       required>
            </div>
        </div>

        <div class="mb-3">
            <label for="fb_rating" class="form-label">Avaliação (1 a 5 estrelas)</label>
            <select class="form-control" id="fb_rating" name="fb_rating" required>
                <option value="" disabled selected>Selecione uma nota</option>
                <option value="5">5 Estrelas (Excelente)</option>
                <option value="4">4 Estrelas (Muito Bom)</option>
                <option value="3">3 Estrelas (Bom)</option>
                <option value="2">2 Estrelas (Razoável)</option>
                <option value="1">1 Estrela (Ruim)</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="fb_mensagem" class="form-label">Mensagem / Comentário</label>
            <textarea class="form-control" 
                      id="fb_mensagem" 
                      name="fb_mensagem" 
                      rows="4" 
                      placeholder="Deixe seu comentário sobre sua experiência..." 
                      required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Enviar Feedback</button>
        <a href="/feedback/listar" class="btn btn-secondary">Cancelar</a>

    </form>
</div>