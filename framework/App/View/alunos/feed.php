

    <style>
        .faq-item {
            transition: all 0.3s ease;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .faq-item.active .faq-answer {
            max-height: 300px;
        }
        .faq-item.active .faq-toggle {
            transform: rotate(180deg);
        }
    </style>

</head>
<style>
        .feedback-section {
            max-width: 600px;
            margin: 2rem auto;
            padding: 2rem;
            background: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .feedback-section h2 {
            color: #333;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .feedback-form .form-group {
            margin-bottom: 1.5rem;
        }
        .feedback-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        .feedback-form input,
        .feedback-form textarea,
        .feedback-form select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        .feedback-form textarea {
            min-height: 120px;
        }
        .feedback-form button {
            background: #007bff;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
        }
        .feedback-form button:hover {
            background: #0056b3;
        }
        .feedback-list {
            margin-top: 2rem;
        }
        .feedback-item {
            background: white;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <section class="feedback-section">
    <h2>Deixe seu Feedback</h2>
    <form class="feedback-form" id="feedbackForm" method="POST" action="/feed/inserir">

        <input type="hidden" name="fb_id" value="">

        <div class="form-group">
            <label for="fb_nome">Nome:</label>
            <input type="text" id="fb_nome" name="fb_nome" required>
        </div>

        <div class="form-group">
            <label for="fb_email">Email:</label>
            <input type="email" id="fb_email" name="fb_email" required>
        </div>

        <div class="form-group">
            <label for="fb_rating">Avaliação:</label>
            <select id="fb_rating" name="fb_rating" required>
                <option value="">Selecione...</option>
                <option value="5">Excelente - 5 estrelas</option>
                <option value="4">Muito bom - 4 estrelas</option>
                <option value="3">Bom - 3 estrelas</option>
                <option value="2">Regular - 2 estrelas</option>
                <option value="1">Ruim - 1 estrela</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fb_mensagem">Mensagem:</label>
            <textarea id="fb_mensagem" name="fb_mensagem" required></textarea>
        </div>

        <button type="submit">Enviar Feedback</button>
    </form>
</section>

        
        <div class="feedback-list" id="feedbackList">
            <!-- Feedbacks serão exibidos aqui -->
        </div>
    </section>

    
</body>
</html>

 