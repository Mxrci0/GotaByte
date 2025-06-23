
        // Formatar CPF/CNPJ
        function formatDocument(input) {
            let value = input.value.replace(/\D/g, '');
            
            if (value.length <= 11) {
                // Formatar como CPF
                value = value.replace(/(\d{3})(\d)/, '$1.$2');
                value = value.replace(/(\d{3})(\d)/, '$1.$2');
                value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            } else {
                // Formatar como CNPJ
                value = value.replace(/^(\d{2})(\d)/, '$1.$2');
                value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
                value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
                value = value.replace(/(\d{4})(\d)/, '$1-$2');
            }
            
            input.value = value;
        }
        
        // Formatar CEP
        function formatCEP(input) {
            let value = input.value.replace(/\D/g, '');
            
            if (value.length > 5) {
                value = value.replace(/^(\d{5})(\d)/, '$1-$2');
            }
            
            input.value = value;
        }
        
        // Buscar CEP (simulação)
        function searchCEP() {
            const cepInput = document.getElementById('cep');
            const cep = cepInput.value.replace(/\D/g, '');
            
            if (cep.length !== 8) {
                showError(cepInput, 'CEP inválido');
                return;
            }
            
            // Simulação de busca de CEP
            document.getElementById('address').value = 'Carregando...';
            
            setTimeout(() => {
                // Aqui normalmente seria uma chamada API para buscar o endereço
                // Estamos simulando com dados fixos
                document.getElementById('address').value = 'Rua Exemplo, 123 - Centro, Cidade/UF';
                hideError(cepInput);
            }, 1000);
        }
        
        // Validação do formulário
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;
            
            // Validar Nome/Razão Social
            const name = document.getElementById('name');
            if (!name.value.trim()) {
                showError(name, 'Por favor, insira seu nome ou razão social');
                isValid = false;
            } else {
                hideError(name);
            }
            
            // Validar Email
            const email = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                showError(email, 'Por favor, insira um email válido');
                isValid = false;
            } else {
                hideError(email);
            }
            
            // Validar CPF/CNPJ
            const documentInput = document.getElementById('document');
            const docValue = documentInput.value.replace(/\D/g, '');
            if ((docValue.length !== 11 && docValue.length !== 14) || !validateDocument(docValue)) {
                showError(documentInput, 'Por favor, insira um CPF ou CNPJ válido');
                isValid = false;
            } else {
                hideError(documentInput);
            }
            
            // Validar CEP
            const cep = document.getElementById('cep');
            const cepValue = cep.value.replace(/\D/g, '');
            if (cepValue.length !== 8) {
                showError(cep, 'Por favor, insira um CEP válido');
                isValid = false;
            } else {
                hideError(cep);
            }
            
            // Validar Endereço
            const address = document.getElementById('address');
            if (!address.value.trim()) {
                showError(address, 'Por favor, insira seu endereço');
                isValid = false;
            } else {
                hideError(address);
            }
            
            // Validar Senha
            const password = document.getElementById('password');
            if (password.value.length < 8) {
                showError(password, 'A senha deve ter pelo menos 8 caracteres');
                isValid = false;
            } else {
                hideError(password);
            }
            
            // Validar Confirmação de Senha
            const confirmPassword = document.getElementById('confirmPassword');
            if (confirmPassword.value !== password.value) {
                showError(confirmPassword, 'As senhas não coincidem');
                isValid = false;
            } else {
                hideError(confirmPassword);
            }
            
            // Validar Termos
            const terms = document.getElementById('terms');
            if (!terms.checked) {
                document.getElementById('termsError').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('termsError').classList.add('hidden');
            }
            
            if (isValid) {
                alert('Cadastro realizado com sucesso!');
                // Aqui você enviaria os dados para o servidor
                // this.submit();
            }
        });
        
        // Mostrar erro
        function showError(input, message) {
            input.classList.add('input-error');
            const errorElement = document.getElementById(input.id + 'Error');
            errorElement.textContent = message;
            errorElement.classList.remove('hidden');
        }
        
        // Esconder erro
        function hideError(input) {
            input.classList.remove('input-error');
            document.getElementById(input.id + 'Error').classList.add('hidden');
        }
        
        // Validar CPF/CNPJ (validação simplificada)
        function validateDocument(doc) {
            // Apenas verifica o tamanho (validação real seria mais complexa)
            return doc.length === 11 || doc.length === 14;
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
   

