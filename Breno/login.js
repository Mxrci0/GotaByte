document.addEventListener('DOMContentLoaded', () => {

  // Toggle menu mobile
  const menuButton = document.getElementById('menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  // Destacar link atual da navbar
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

  // Formatar CPF/CNPJ no campo 'document'
  const documentInput = document.getElementById('document');
  documentInput.addEventListener('input', () => formatDocument(documentInput));

  // Formatar CEP no campo 'cep'
  const cepInput = document.getElementById('cep');
  cepInput.addEventListener('input', () => formatCEP(cepInput));

  // Botão buscar CEP
  const cepButton = document.getElementById('cep-button');
  cepButton.addEventListener('click', () => searchCEP());

  // Validação do formulário
  const form = document.getElementById('registrationForm');
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    let isValid = true;

    // validações (nome, email, cpf/cnpj, cep, endereço, senha, confirmação e termos)...
    // ... seu código aqui ...
  });

  // Função para alternar visibilidade da senha
  function togglePasswordVisibility(toggleButtonId, inputId) {
    const toggleButton = document.getElementById(toggleButtonId);
    const input = document.getElementById(inputId);

    if (!toggleButton || !input) return;

    toggleButton.addEventListener('click', () => {
      if (input.type === 'password') {
        input.type = 'text';
        toggleButton.querySelector('i').classList.remove('fa-eye');
        toggleButton.querySelector('i').classList.add('fa-eye-slash');
      } else {
        input.type = 'password';
        toggleButton.querySelector('i').classList.remove('fa-eye-slash');
        toggleButton.querySelector('i').classList.add('fa-eye');
      }
    });
  }

  togglePasswordVisibility('togglePassword', 'password');
  togglePasswordVisibility('toggleConfirmPassword', 'confirmPassword');

})

