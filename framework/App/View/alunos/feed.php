

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
       <form class="feedback-form" id="feedbackForm" method="POST" action="">
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
    </div>
    
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    
    <div class="form-group">
        <label for="rating">Avaliação:</label>
        <select id="rating" name="rating" required>
            <option value="">Selecione...</option>
            <option value="5">Excelente - 5 estrelas</option>
            <option value="4">Muito bom - 4 estrelas</option>
            <option value="3">Bom - 3 estrelas</option>
            <option value="2">Regular - 2 estrelas</option>
            <option value="1">Ruim - 1 estrela</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="message">Mensagem:</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    
    <button type="submit">Enviar Feedback</button>
</form>

        
        <div class="feedback-list" id="feedbackList">
            <!-- Feedbacks serão exibidos aqui -->
        </div>
    </section>

    <script>
        document.getElementById('feedbackForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const rating = document.getElementById('rating').value;
            const message = document.getElementById('message').value;
            
            // Criar novo feedback
            const feedbackItem = document.createElement('div');
            feedbackItem.className = 'feedback-item';
            feedbackItem.innerHTML = `
                <h3>${name} - ${'★'.repeat(rating)}${'☆'.repeat(5-rating)}</h3>
                <p><strong>Email:</strong> ${email}</p>
                <p>${message}</p>
                <small>Enviado em: ${new Date().toLocaleString()}</small>
            `;
            
            // Adicionar feedback à lista
            document.getElementById('feedbackList').prepend(feedbackItem);
            
            // Limpar formulário
            this.reset();
            
            // Mostrar mensagem de sucesso (opcional)
            alert('Obrigado pelo seu feedback!');
        });
          document.addEventListener('DOMContentLoaded', function () {
        const links = document.querySelectorAll('.nav-link');
        const currentPage = window.location.pathname.split('/').pop();

        links.forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPage) {
                link.classList.add('text-cyan-600', 'font-semibold');
            } else {
                link.classList.add('text-gray-600', 'hover:text-cyan-600');
            }
        });
    });
    // Toggle menu mobile
        document.getElementById('menu-button').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Abrir primeiro item do FAQ
        document.addEventListener('DOMContentLoaded', function () {
            const firstFaq = document.querySelector('.faq-item');
            if (firstFaq) firstFaq.classList.add('active');

            // Destacar link atual
            const links = document.querySelectorAll('.nav-link');
            const currentPage = window.location.pathname.split('/').pop();

            links.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentPage) {
                    link.classList.add('text-cyan-600', 'font-semibold');
                } else {
                    link.classList.add('text-gray-600', 'hover:text-cyan-600');
                }
            });
        });

        // FAQ toggle
        function toggleFAQ(element) {
            const faqItem = element.closest('.faq-item');
            faqItem.classList.toggle('active');

            const container = faqItem.parentElement;
            container.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    item.classList.remove('active');
                }
            });
        }
        // Alterna menu mobile
    document.getElementById('menu-button').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Destaque do link ativo (hover fixo)
    document.addEventListener('DOMContentLoaded', function () {
        const links = document.querySelectorAll('.nav-link');
        const currentPage = window.location.pathname.split('/').pop(); // pega o nome do arquivo atual

        links.forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPage) {
                // Aplica estilo hover fixo no link ativo
                link.classList.add('text-cyan-600', 'font-semibold');
                link.classList.remove('text-gray-600');
            } else {
                // Links não ativos ficam cinza com hover cyan
                link.classList.add('text-gray-600', 'hover:text-cyan-600');
                link.classList.remove('text-cyan-600', 'font-semibold');
            }
        });
    });
    </script>
    
</body>
</html>

 