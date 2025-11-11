

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


    <!-- ✅ CONTEÚDO -->
    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-indigo-800 mb-4">Canais de Contato</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Estamos aqui para ajudar você. Encontre respostas rápidas ou entre em contato com nosso time de suporte.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- FAQ Section -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-indigo-700 p-6">
                    <div class="flex items-center">
                        <i class="fas fa-question-circle text-white text-2xl mr-3"></i>
                        <h2 class="text-2xl font-semibold text-white">Perguntas Frequentes</h2>
                    </div>
                    <p class="text-indigo-100 mt-2">Encontre respostas para as dúvidas mais comuns</p>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <!-- FAQ Items -->
                        <div class="faq-item border-b border-gray-200 pb-4">
                            <div class="flex justify-between items-center cursor-pointer group" onclick="toggleFAQ(this)">
                                <h3 class="font-medium text-gray-800 group-hover:text-indigo-600">Como faço para criar uma conta?</h3>
                                <i class="fas fa-chevron-down faq-toggle text-gray-500 transition-transform"></i>
                            </div>
                            <div class="faq-answer mt-2 text-gray-600">
                                <p>Para criar uma conta, clique em "Registrar" no canto superior direito do site. Preencha o formulário com seus dados pessoais e siga as instruções enviadas para seu e-mail para confirmar sua conta.</p>
                            </div>
                        </div>

                        <div class="faq-item border-b border-gray-200 pb-4">
                            <div class="flex justify-between items-center cursor-pointer group" onclick="toggleFAQ(this)">
                                <h3 class="font-medium text-gray-800 group-hover:text-indigo-600">Esqueci minha senha, o que fazer?</h3>
                                <i class="fas fa-chevron-down faq-toggle text-gray-500 transition-transform"></i>
                            </div>
                            <div class="faq-answer mt-2 text-gray-600">
                                <p>Na página de login, clique em "Esqueci minha senha". Você receberá um e-mail com um link para redefinir sua senha.</p>
                            </div>
                        </div>

                        <div class="faq-item border-b border-gray-200 pb-4">
                            <div class="flex justify-between items-center cursor-pointer group" onclick="toggleFAQ(this)">
                                <h3 class="font-medium text-gray-800 group-hover:text-indigo-600">Quais são os métodos de pagamento aceitos?</h3>
                                <i class="fas fa-chevron-down faq-toggle text-gray-500 transition-transform"></i>
                            </div>
                            <div class="faq-answer mt-2 text-gray-600">
                                <p>Aceitamos cartões de crédito, Pix, boleto bancário e transferência bancária.</p>
                            </div>
                        </div>

                        <div class="faq-item border-b border-gray-200 pb-4">
                            <div class="flex justify-between items-center cursor-pointer group" onclick="toggleFAQ(this)">
                                <h3 class="font-medium text-gray-800 group-hover:text-indigo-600">Como posso cancelar minha assinatura?</h3>
                                <i class="fas fa-chevron-down faq-toggle text-gray-500 transition-transform"></i>
                            </div>
                            <div class="faq-answer mt-2 text-gray-600">
                                <p>Acesse "Minha Conta" > "Assinaturas" e clique em "Cancelar Assinatura".</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Suporte Section -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-indigo-600 p-6">
                    <div class="flex items-center">
                        <i class="fas fa-headset text-white text-2xl mr-3"></i>
                        <h2 class="text-2xl font-semibold text-white">Suporte/Ajuda no Site</h2>
                    </div>
                    <p class="text-indigo-100 mt-2">Precisa de ajuda adicional? Entre em contato conosco</p>
                </div>
                <div class="p-6 space-y-6">
                    <!-- Contact Options -->
                    <div class="flex items-start">
                        <div class="bg-indigo-100 p-3 rounded-full mr-4">
                            <i class="fas fa-envelope text-indigo-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">E-mail de Suporte</h3>
                            <p class="text-gray-600 mt-1">suporte@exemplo.com</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-indigo-100 p-3 rounded-full mr-4">
                            <i class="fas fa-phone-alt text-indigo-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">Telefone</h3>
                            <p class="text-gray-600 mt-1">(19) 4002-8922</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ✅ SCRIPTS -->
    <script>
        // Menu responsivo
        document.getElementById('menu-button').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Abrir primeiro FAQ
        document.addEventListener('DOMContentLoaded', function () {
            const firstFaq = document.querySelector('.faq-item');
            if (firstFaq) firstFaq.classList.add('active');

            // Destaque do link atual
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

        // Expandir FAQ
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
