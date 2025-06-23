

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
    });