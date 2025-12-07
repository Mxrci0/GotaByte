<!-- ✅ NAVBAR RESPONSIVA -->
    <nav class="bg-white shadow-sm py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-tint text-cyan-500 text-2xl mr-2"></i>
                <span class="text-xl font-bold">Gotabyte</span>
            </div>

            <!-- Botão hamburguer (mobile) -->
            <button class="md:hidden text-2xl text-gray-600" id="menu-button">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Menu desktop -->
        <div class="hidden md:flex space-x-4 items-center flex-wrap">
            <a href="/" class="nav-link">Home</a>
            <a href="/feed" class="nav-link">Feedback</a>
            <a href="/ajuda" class="nav-link">Ajuda</a>
            <a href="/relatorio" class="nav-link">Historico</a>
            <a href="/dicas" class="nav-link">Dicas</a>
            <a href="/modo" class="block nav-link">Alerta</a>
            <a href="/entrar" class="nav-link"><i class="fas fa-sign-in-alt mr-1"></i> Login</a>
            <a href="/login" class="bg-cyan-600 text-white px-4 py-2 rounded hover:bg-cyan-700">
                <i class="fas fa-user-plus mr-1"></i> Cadastro
            </a>
        </div>
    </div>
    <div id="mobile-menu" class="md:hidden hidden px-4 mt-2 space-y-2">
        <a href="/" class="block nav-link">Home</a>
        <a href="feed.html" class="block nav-link">Feedback</a>
        <a href="ajuda.html" class="block nav-link">Ajuda</a>
        <a href="relatorio.html" class="block nav-link">Historico</a>
        <a href="dicas.html" class="block nav-link">Dicas</a>
        
        <a href="/modo" class="block nav-link">Alerta</a>
        <a href="/necessidades" class="block nav-link">Forum</a>
        
        <a href="perfil.html" class="block nav-link">Perfil</a>
        <a href="entrar.html" class="block nav-link">Login</a>
        <a href="login.html" class="block bg-cyan-600 text-white px-4 py-2 rounded hover:bg-cyan-700">Cadastro</a>
    </div>
    </nav>