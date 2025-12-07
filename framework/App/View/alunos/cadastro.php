!DOCTYPE html>
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
            </button><!-- Form PF -->
            <form action="/login-inserir" method="POST" id="form_pf" class="hidden space-y-3 border rounded p-4">
                <h2 class="text-xl font-semibold">Cadastro - Pessoa Física</h2>

                <input type="text" name="name" placeholder="Nome completo" class="w-full p-2 border rounded">
                <input type="text" name="cpf" placeholder="CPF" class="w-full p-2 border rounded">
                <input type="email" name="email" placeholder="E-mail" class="w-full p-2 border rounded">
                <input type="tel" name="tel" placeholder="Telefone" class="w-full p-2 border rounded">
                <input type="password" name="senha" placeholder="Senha" class="w-full p-2 border rounded">

                <input type="submit" title="Cadastrar" class="block w-full bg-purple-600 text-white p-2 rounded text-center">
            </form>


            <!-- Form PJ -->
            <form id="form_pj" class="hidden space-y-3 border rounded p-4">
                <h2 class="text-xl font-semibold">Cadastro - Pessoa Jurídica</h2>

                <input type="razao" placeholder="Razão Social" class="w-full p-2 border rounded">
                <input type="cnpj" placeholder="CNPJ" class="w-full p-2 border rounded">
                <input type="nomeresp" placeholder="Nome do responsável" class="w-full p-2 border rounded">
                <input type="email" placeholder="E-mail" class="w-full p-2 border rounded">
                <input type="tel" placeholder="Telefone" class="w-full p-2 border rounded">
                <input type="senha" placeholder="Senha" class="w-full p-2 border rounded">

                <a href="/" class="block w-full bg-purple-600 text-white p-2 rounded text-center">
                    Cadastrar
                </a>

            </form>

            <!-- Form Prefeitura -->
            <form id="form_pref" class="hidden space-y-3 border rounded p-4">
                <h2 class="text-xl font-semibold">Cadastro - Prefeitura</h2>

                <input type="namepre" placeholder="Nome da Prefeitura" class="w-full p-2 border rounded">
                <input type="cnpj" placeholder="CNPJ" class="w-full p-2 border rounded">
                <input type="nomerespre" placeholder="Nome do responsável" class="w-full p-2 border rounded">
                <input type="email" placeholder="E-mail institucional" class="w-full p-2 border rounded">
                <input type="tel" placeholder="Telefone" class="w-full p-2 border rounded">
                <input type="senha" placeholder="Senha" class="w-full p-2 border rounded">

                <a href="/" class="block w-full bg-purple-600 text-white p-2 rounded text-center">
                    Cadastrar
                </a>

            </form>

        </div>