// ========================================
// GESTION DU BOUTON "VOIR PLUS" DE PROJETS
// ========================================

(function() {
    'use strict';
    
    // Attendre que le DOM soit chargé
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
    function init() {
        const toggleButton = document.getElementById('toggleProjects');
        
        if (!toggleButton) {
            console.warn('Bouton toggleProjects non trouvé');
            return;
        }
        
        console.log('✓ Bouton "Voir plus" initialisé');
        
        let isExpanded = false;
        
        toggleButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('>>> Clic sur le bouton. État actuel:', isExpanded ? 'Ouvert' : 'Fermé');
            
            const hiddenProjects = document.querySelectorAll('.project-card.project-hidden');
            const buttonText = this.querySelector('.btn-text');
            
            console.log('>>> Projets cachés trouvés:', hiddenProjects.length);
            
            if (hiddenProjects.length === 0) {
                console.error('Aucun projet avec la classe .project-hidden trouvé !');
                return;
            }
            
            if (!isExpanded) {
                // OUVRIR - Afficher tous les projets
                console.log('>>> Action: AFFICHER les projets');
                
                hiddenProjects.forEach((project, index) => {
                    setTimeout(() => {
                        // Retirer display:none
                        project.style.display = 'block';
                        
                        // Forcer un reflow
                        void project.offsetHeight;
                        
                        // Ajouter la classe pour l'animation
                        project.classList.add('show');
                        
                        console.log('  ✓ Projet', index + 1, 'affiché');
                    }, index * 100);
                });
                
                // Mettre à jour le bouton
                buttonText.textContent = 'Voir moins de projets';
                this.classList.add('expanded');
                isExpanded = true;
                
                console.log('>>> Tous les projets sont maintenant visibles');
                
            } else {
                // FERMER - Masquer les projets
                console.log('>>> Action: MASQUER les projets');
                
                hiddenProjects.forEach((project, index) => {
                    project.classList.remove('show');
                    console.log('  ✓ Projet', index + 1, 'masqué');
                });
                
                // Attendre la fin de l'animation avant de masquer complètement
                setTimeout(() => {
                    hiddenProjects.forEach(project => {
                        project.style.display = 'none';
                    });
                }, 500);
                
                // Mettre à jour le bouton
                buttonText.textContent = 'Voir plus de projets';
                this.classList.remove('expanded');
                isExpanded = false;
                
                // Scroll vers la section projets
                setTimeout(() => {
                    const projectsSection = document.getElementById('projets');
                    if (projectsSection) {
                        projectsSection.scrollIntoView({ 
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }, 100);
                
                console.log('>>> Projets masqués, retour en haut');
            }
        });
        
        // Test initial
        const hiddenCount = document.querySelectorAll('.project-card.project-hidden').length;
        console.log('>>> État initial: ' + hiddenCount + ' projets cachés');
    }
})();