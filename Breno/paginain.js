

        // Menu mobile simples
        document.querySelector('nav button').addEventListener('click', function() {
            alert('Menu mobile seria aberto aqui em uma implementação completa');
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
    }); // Toggle menu mobile
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