document.addEventListener('DOMContentLoaded', function() {
    const profilesContainer = document.getElementById('profiles-container');
    const addProfileBtn = document.getElementById('add-profile-btn');
    const addProfileModal = document.getElementById('add-profile-modal');
    const cancelAddProfile = document.getElementById('cancel-add-profile');
    const confirmAddProfile = document.getElementById('confirm-add-profile');
    const profileNameInput = document.getElementById('profile-name');
    const manageButton = document.querySelector('button.mt-16'); // botão "Gerenciar perfis"

    let profiles = [];
    let isManaging = false; // flag para modo gerenciar

    function renderProfiles() {
        profilesContainer.innerHTML = '';

        profiles.forEach(profile => {
            const profileElement = document.createElement('div');
            profileElement.className = 'w-32 flex flex-col items-center cursor-pointer profile-card relative';

            profileElement.innerHTML = `
                <div class="w-24 h-24 rounded-md flex items-center justify-center mb-3 relative" style="background-color: ${profile.color}">
                    <i class="fas fa-user text-3xl text-white"></i>
                    ${isManaging ? `<button class="delete-btn absolute top-1 right-1 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs hover:bg-red-700" title="Excluir perfil">&times;</button>` : ''}
                </div>
                <span>${profile.name}</span>
            `;

            // Seleciona perfil se não estiver gerenciando
            profileElement.addEventListener('click', function(e) {
                if (isManaging) return; // não seleciona no modo gerenciar
                alert(`Perfil ${profile.name} selecionado!`);
            });

            if (isManaging) {
                profileElement.querySelector('.delete-btn').addEventListener('click', function(e) {
                    e.stopPropagation();
                    profiles = profiles.filter(p => p.id !== profile.id);
                    renderProfiles();
                });
            }

            profilesContainer.appendChild(profileElement);
        });

        profilesContainer.appendChild(addProfileBtn);
    }

    addProfileBtn.addEventListener('click', function() {
        if (isManaging) return; // desativa adicionar perfil no modo gerenciar
        addProfileModal.classList.remove('opacity-0', 'pointer-events-none');
        profileNameInput.focus();
    });

    cancelAddProfile.addEventListener('click', function() {
        addProfileModal.classList.add('opacity-0', 'pointer-events-none');
        profileNameInput.value = '';
    });

    confirmAddProfile.addEventListener('click', function() {
        const name = profileNameInput.value.trim();
        if (name) {
            const colors = ['#E50914', '#0071EB', '#46D369', '#B81D24', '#221F1F', '#F5F5F1'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];

            const newProfile = {
                id: Date.now(),
                name,
                color: randomColor
            };

            profiles.push(newProfile);
            renderProfiles();

            addProfileModal.classList.add('opacity-0', 'pointer-events-none');
            profileNameInput.value = '';
        }
    });

    addProfileModal.addEventListener('click', function(e) {
        if (e.target === addProfileModal) {
            addProfileModal.classList.add('opacity-0', 'pointer-events-none');
            profileNameInput.value = '';
        }
    });

    // Controle do botão Gerenciar perfis
    manageButton.addEventListener('click', function() {
        isManaging = !isManaging;
        manageButton.textContent = isManaging ? 'Concluir gerenciamento' : 'Gerenciar perfis';
        renderProfiles();
    });

    renderProfiles();
});
