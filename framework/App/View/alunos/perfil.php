

      <style>
          .faq-item {
              transition: all 0.3s ease;
          }
          .faq-answer {
              max-height: 0;
              overflow: hidden;
              transition: max-height 0.3s ease;
          }
          .faq-item.active .faq-answer {
              max-height: 300px;
          }
          .faq-item.active .faq-toggle {
              transform: rotate(180deg);
          }
      </style>
  </head>

  <body class="bg-gray-50 font-sans min-h-screen flex flex-col">
      
    

    <main class="flex-grow flex items-center justify-center">
      <div class="text-center px-4">
        <h1 class="text-4xl md:text-5xl font-medium mb-12">Selecione um perfil?</h1>

        <!-- Somente botão de adicionar perfil -->
        <div class="flex flex-wrap justify-center gap-6 max-w-4xl mx-auto" id="profiles-container">
          <div class="w-32 flex flex-col items-center cursor-pointer" id="add-profile-btn">
            <div class="w-24 h-24 bg-gray-700 rounded-md flex items-center justify-center">
    <i class="fas fa-user text-3xl text-white-400"></i>
  </div>

            <span class="text-gray-400">Adicionar perfil</span>
          </div>
        </div>

        <button class="mt-16 px-8 py-2 border border-gray-600 text-gray-400 hover:text-white hover:border-white transition">
          Gerenciar perfis
        </button>
      </div>
    </main>

    <!-- Modal para adicionar perfil -->
    <div class="modal fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 pointer-events-none z-50" id="add-profile-modal">
      <div class="modal-content bg-[#333] rounded-md p-8 w-full max-w-md">
        <h2 class="text-2xl font-medium mb-6">Adicionar perfil</h2>
        <div class="mb-6">
          <div class="flex justify-center mb-4">
            <div class="w-24 h-24 bg-gray-700 rounded-md flex items-center justify-center">
              <i class="fas fa-user text-3xl text-gray-400"></i>
            </div>
          </div>
          <input type="text" id="profile-name" placeholder="Nome" class="w-full bg-gray-700 px-4 py-3 rounded text-white placeholder-gray-400">
        </div>
        <div class="flex justify-end space-x-3">
          <button class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-500 transition" id="cancel-add-profile">
            Cancelar
          </button>
          <button class="px-4 py-2 bg-white text-black rounded hover:bg-gray-200 transition" id="confirm-add-profile">
            Continuar
          </button>
        </div>
      </div>
    </div>

    <script src="perfil.js"></script>
 
  </body>
  </html>
