<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página de Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

   
</head>

<body class="bg-gray-50 font-sans">

    

    <main class="flex-grow flex items-center justify-center min-h-screen bg-gray-100">
        <div class="login-card bg-white rounded-xl p-8 w-full max-w-md shadow-md">

            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Bem-vindo</h1>
                <p class="text-gray-600">Selecione o tipo de acesso</p>
            </div>
            
            <div class="space-y-4">
                <button onclick="selectOption('pfpj')" class="btn-pf w-full py-3 px-4 rounded-lg text-white font-medium text-lg transition-all duration-200 flex items-center justify-center bg-cyan-600 hover:bg-cyan-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <a href="login.html">PF/PJ</a>
                </button>
                
                <button onclick="selectOption('prefeitura')" class="btn-pref w-full py-3 px-4 rounded-lg text-white font-medium text-lg transition-all duration-200 flex items-center justify-center bg-cyan-600 hover:bg-cyan-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <a href="login.html">Prefeitura</a>
                </button>
            </div>

            <div class="mt-8 text-center text-sm text-gray-500">
                <p>Precisa de ajuda? <a href="ajuda.html" class="text-blue-500 hover:underline">Contate o suporte</a></p>
            </div>
        </div>
    </main>

    <script src="index.js"></script>
  
</body>
</html>
