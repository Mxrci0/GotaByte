function selectoption(option) {
    if (option === 'pfpj') {
        alert('Você selecionou o acesso para Pessoa Física/Jurídica');
        // Redirecionar para página de login PF/PJ
        // window.location.href = '/login-pfpj';
    } else if (option === 'prefeitura') {
        alert('Você selecionou o acesso para Prefeitura');
        // Redirecionar para página de login Prefeitura
        // window.location.href = '/login-prefeitura';
    }
}

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
