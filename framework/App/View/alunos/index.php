
    <style>
        /* Custom Styles */
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Gradient background for the hero section */
        .hero-bg {
            background: linear-gradient(90deg, rgba(22,163,175,1) 0%, rgba(14,116,144,1) 100%);
        }
        
     
        
    </style>
</head>

<body class="bg-gray-50">
    
    
    <main>
        <!-- ✅ HERO SECTION -->
        <section id="home" class="hero-bg text-white py-20 md:py-28">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">Gestão Inteligente de Água</h1>
                <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto text-gray-200">
                    Soluções inovadoras para monitoramento e conservação de recursos hídricos.
                </p>
                <div class="flex justify-center">
                    <a href="/login" class="bg-white text-cyan-700 font-bold px-8 py-3 rounded-lg hover:bg-gray-100">
                        Conheça as Soluções
                    </a>
                </div>
            </div>
        </section>

        <!-- ✅ FEATURES (SOLUÇÕES) SIMPLIFICADAS -->
        <section id="solucoes" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Nossas Soluções</h2>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="text-center p-6 bg-gray-50 rounded-lg shadow-md">
                        <div class="text-cyan-600 text-4xl mx-auto mb-4">
                           <a href="relatorio.html"><i class="fas fa-water"></i></a>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Monitoramento</h3>
                        <p class="text-gray-600">
                            Controle o consumo de água em tempo real.
                        </p>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="text-center p-6 bg-gray-50 rounded-lg shadow-md">
                        <div class="text-cyan-600 text-4xl mx-auto mb-4">
                           <a href="relatorio.html"><i class="fas fa-chart-line"></i></a>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Relatórios Detalhados</h3>
                        <p class="text-gray-600">
                            Análises para identificar oportunidades de economia.
                        </p>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="text-center p-6 bg-gray-50 rounded-lg shadow-md">
                        <div class="text-cyan-600 text-4xl mx-auto mb-4">
                           <a href="modo.html"><i class="fas fa-bell"></i></a>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Alertas Inteligentes</h3>
                        <p class="text-gray-600">
                            Notificações sobre vazamentos e consumo anormal.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✅ CTA FINAL -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Pronto para começar?</h2>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    Cadastre-se e tenha controle sobre seu consumo de água.
                </p>
                <a href="/login" class="bg-cyan-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-cyan-700 inline-block">
                    <i class="fas fa-user-plus mr-2"></i> Cadastre-se Grátis
                </a>
            </div>
        </section>
    </main>

    <!-- ✅ FOOTER -->
  
    <!-- JavaScript para interatividade -->
    <script>
        // Script para o menu hamburguer
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
