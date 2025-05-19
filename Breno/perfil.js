
        document.addEventListener('DOMContentLoaded', function() {
            const profilesContainer = document.getElementById('profiles-container');
            const addProfileBtn = document.getElementById('add-profile-btn');
            const addProfileModal = document.getElementById('add-profile-modal');
            const cancelAddProfile = document.getElementById('cancel-add-profile');
            const confirmAddProfile = document.getElementById('confirm-add-profile');
            const profileNameInput = document.getElementById('profile-name');
            
            // Sample profiles (could be loaded from localStorage)
            let profiles = [
                { id: 1, name: 'João', color: '#E50914' },
                { id: 2, name: 'Maria', color: '#0071EB' },
                { id: 3, name: 'Criança', color: '#46D369' }
            ];
            
            // Render profiles
            function renderProfiles() {
                // Clear existing profiles (except the add button)
                profilesContainer.innerHTML = '';
                
                // Add each profile
                profiles.forEach(profile => {
                    const profileElement = document.createElement('div');
                    profileElement.className = 'w-32 flex flex-col items-center cursor-pointer profile-card';
                    profileElement.innerHTML = `
                        <div class="w-24 h-24 rounded-md flex items-center justify-center mb-3" style="background-color: ${profile.color}">
                            <i class="fas fa-user text-3xl text-white"></i>
                        </div>
                        <span>${profile.name}</span>
                    `;
                    
                    // Add click event to select profile
                    profileElement.addEventListener('click', function() {
                        alert(`Perfil ${profile.name} selecionado!`);
                    });
                    
                    profilesContainer.appendChild(profileElement);
                });
                
                // Add the "Add Profile" button back
                profilesContainer.appendChild(addProfileBtn);
            }
            
            // Show modal
            addProfileBtn.addEventListener('click', function() {
                addProfileModal.classList.add('show');
                profileNameInput.focus();
            });
            
            // Hide modal
            cancelAddProfile.addEventListener('click', function() {
                addProfileModal.classList.remove('show');
                profileNameInput.value = '';
            });
            
            // Add new profile
            confirmAddProfile.addEventListener('click', function() {
                const name = profileNameInput.value.trim();
                if (name) {
                    const colors = ['#E50914', '#0071EB', '#46D369', '#E50914', '#B81D24', '#221F1F', '#F5F5F1'];
                    const randomColor = colors[Math.floor(Math.random() * colors.length)];
                    
                    const newProfile = {
                        id: Date.now(),
                        name: name,
                        color: randomColor
                    };
                    
                    profiles.push(newProfile);
                    renderProfiles();
                    
                    // Hide modal and clear input
                    addProfileModal.classList.remove('show');
                    profileNameInput.value = '';
                }
            });
            
            // Close modal when clicking outside
            addProfileModal.addEventListener('click', function(e) {
                if (e.target === addProfileModal) {
                    addProfileModal.classList.remove('show');
                    profileNameInput.value = '';
                }
            });
            
            // Initial render
            renderProfiles();
        });
   