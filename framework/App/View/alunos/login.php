<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - GotaByte</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-sm py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center">
                <i class="fas fa-tint text-cyan-500 text-2xl mr-2"></i>
                <span class="text-xl font-bold">Gotabyte</span>
            </div>

            <!-- Menu Mobile -->
            <button class="md:hidden text-2xl text-gray-600" id="menu-button">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Menu Desktop -->
            <div class="hidden md:flex space-x-4 items-center">
                <a href="/" class="nav-link">Home</a>
                <a href="/feed" class="nav-link">Feedback</a>
                <a href="/ajuda" class="nav-link">Ajuda</a>
                <a href="/relatorio" class="nav-link">Histórico</a>
                <a href="/dicas" class="nav-link">Dicas</a>
                <a href="/modo" class="nav-link">Alerta</a>
                <a href="/necessidades" class="nav-link">Fórum</a>
                <a href="/perfil" class="nav-link"><i class="fas fa-user mr-1"></i> Perfil</a>
                <a href="/entrar" class="nav-link"><i class="fas fa-sign-in-alt mr-1"></i> Login</a>
                <a href="/login" class="bg-cyan-600 text-white px-4 py-2 rounded hover:bg-cyan-700">
                    <i class="fas fa-user-plus mr-1"></i> Cadastro
                </a>
            </div>
        </div>

        <!-- Menu Mobile Dropdown -->
        <div id="mobile-menu" class="md:hidden hidden px-4 mt-2 space-y-2">
            <a href="/" class="block nav-link">Home</a>
            <a href="/feed" class="block nav-link">Feedback</a>
            <a href="/ajuda" class="block nav-link">Ajuda</a>
            <a href="/relatorio" class="block nav-link">Histórico</a>
            <a href="/dicas" class="block nav-link">Dicas</a>
            <a href="/modo" class="block nav-link">Alerta</a>
            <a href="/necessidades" class="block nav-link">Fórum</a>
            <a href="/perfil" class="block nav-link">Perfil</a>
            <a href="/entrar" class="block nav-link">Login</a>
            <a href="/login" class="block bg-cyan-600 text-white px-4 py-2 rounded hover:bg-cyan-700">Cadastro</a>
        </div>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="flex-grow p-6">
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">

            <h1 class="text-2xl font-bold mb-4">Faça seu Cadastro</h1>

           
           

            <!-- Form PF -->
            <form action="/login/inserir" method="POST" id="form_pf" class=" space-y-3 border rounded p-4">
                <h2 class="text-xl font-semibold">Cadastro - Pessoa Física</h2>

                <input type="text" name="name" placeholder="Nome completo" class="w-full p-2 border rounded" required>
                <input type="text" name="cpf" placeholder="CPF" class="w-full p-2 border rounded" required>
                <input type="email" name="email" placeholder="E-mail" class="w-full p-2 border rounded" required>
                <input type="tel" name="tel" placeholder="Telefone" class="w-full p-2 border rounded"required>
                <input type="password" name="password" placeholder="Senha" class="w-full p-2 border rounded" required>
                <input type="submit" title="Cadastrar" class="block w-full bg-purple-600 text-white p-2 rounded text-center" >

            </form>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">

            <div class="flex flex-col md:flex-row justify-between items-center">

                <div class="mb-4 md:mb-0">
                    <div class="flex items-center justify-center md:justify-start">
                        <i class="fas fa-tint text-cyan-400 text-2xl mr-2"></i>
                        <span class="text-xl font-bold">Gotabyte</span>
                    </div>
                    <p class="text-gray-400 mt-2 text-center md:text-left">Us for water, water for us</p>
                </div>

                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>

            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Gotabyte. Todos os direitos reservados.</p>
            </div>

        </div>
    </footer>

    

</body>

</html>