// ==========================================
// SMOOTH SCROLL & ACTIVE NAV LINKS
// ==========================================

document.addEventListener('DOMContentLoaded', () => {
    // Smooth scroll pour les liens de navigation
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Activer le lien de navigation correspondant à la section visible
    const sections = document.querySelectorAll('section');
    
    const observerOptions = {
        root: null,
        rootMargin: '-100px 0px -66%',
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const sectionId = entry.target.getAttribute('id');
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });
});

// ==========================================
// SCROLL ANIMATIONS
// ==========================================

const animateOnScroll = () => {
    const elements = document.querySelectorAll('.project-card, .skill-category, .about-text, .contact-info');
    
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, observerOptions);

    elements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(element);
    });
};

// Initialiser les animations au scroll
document.addEventListener('DOMContentLoaded', animateOnScroll);

// ==========================================
// CHART ANIMATION
// ==========================================

const animateChart = () => {
    const chartSegments = document.querySelectorAll('.chart-segment');
    
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                chartSegments.forEach((segment, index) => {
                    setTimeout(() => {
                        segment.style.opacity = '1';
                        segment.style.strokeDashoffset = segment.getAttribute('stroke-dashoffset');
                    }, index * 200);
                });
            }
        });
    }, observerOptions);

    const chart = document.querySelector('.donut-chart');
    if (chart) {
        // Cacher les segments au départ
        chartSegments.forEach(segment => {
            segment.style.opacity = '0';
            segment.style.transition = 'opacity 0.5s ease, stroke-dashoffset 1s ease';
        });
        
        observer.observe(chart);
    }
};

document.addEventListener('DOMContentLoaded', animateChart);

// ==========================================
// FORM HANDLING
// ==========================================

const handleFormSubmit = () => {
    const form = document.querySelector('.contact-form');
    
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const formData = new FormData(form);
            const data = Object.fromEntries(formData);
            
            // Simulation d'envoi (remplacer par votre logique d'envoi)
            console.log('Données du formulaire:', data);
            
            // Animation de succès
            const submitButton = form.querySelector('.form-submit');
            const originalText = submitButton.innerHTML;
            
            submitButton.innerHTML = '<span>Message envoyé ✓</span>';
            submitButton.style.background = '#64FFDA';
            submitButton.style.color = '#0a0a0a';
            
            // Réinitialiser le formulaire
            setTimeout(() => {
                form.reset();
                submitButton.innerHTML = originalText;
                submitButton.style.background = '';
                submitButton.style.color = '';
            }, 3000);
        });
    }
};

document.addEventListener('DOMContentLoaded', handleFormSubmit);

// ==========================================
// PARALLAX EFFECT
// ==========================================

const parallaxEffect = () => {
    const hero = document.querySelector('.hero');
    
    if (hero) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroContent = hero.querySelector('.hero-content');
            
            if (heroContent && scrolled < window.innerHeight) {
                heroContent.style.transform = `translateY(${scrolled * 0.5}px)`;
                heroContent.style.opacity = 1 - (scrolled / window.innerHeight);
            }
        });
    }
};

document.addEventListener('DOMContentLoaded', parallaxEffect);

// ==========================================
// CURSOR EFFECT (Optional - Desktop only)
// ==========================================

const customCursor = () => {
    if (window.matchMedia('(min-width: 1024px)').matches) {
        const cursor = document.createElement('div');
        cursor.className = 'custom-cursor';
        cursor.style.cssText = `
            position: fixed;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #64FFDA;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.15s ease;
            mix-blend-mode: difference;
            display: none;
        `;
        document.body.appendChild(cursor);

        let mouseX = 0, mouseY = 0;
        let cursorX = 0, cursorY = 0;

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            cursor.style.display = 'block';
        });

        document.addEventListener('mouseleave', () => {
            cursor.style.display = 'none';
        });

        const animateCursor = () => {
            cursorX += (mouseX - cursorX) * 0.2;
            cursorY += (mouseY - cursorY) * 0.2;
            
            cursor.style.left = cursorX + 'px';
            cursor.style.top = cursorY + 'px';
            
            requestAnimationFrame(animateCursor);
        };
        
        animateCursor();

        // Agrandir le curseur sur les éléments interactifs
        const interactiveElements = document.querySelectorAll('a, button, .project-card');
        
        interactiveElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursor.style.transform = 'scale(3)';
            });
            
            element.addEventListener('mouseleave', () => {
                cursor.style.transform = 'scale(1)';
            });
        });
    }
};

document.addEventListener('DOMContentLoaded', customCursor);

// ==========================================
// NAVIGATION BAR BACKGROUND ON SCROLL
// ==========================================

const navbarScroll = () => {
    const nav = document.querySelector('.nav');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            nav.style.background = 'rgba(10, 10, 10, 0.95)';
        } else {
            nav.style.background = 'rgba(10, 10, 10, 0.8)';
        }
    });
};

document.addEventListener('DOMContentLoaded', navbarScroll);

// ==========================================
// SKILL TAGS ANIMATION
// ==========================================

const animateSkillTags = () => {
    const skillTags = document.querySelectorAll('.skill-tag');
    
    skillTags.forEach((tag, index) => {
        tag.style.opacity = '0';
        tag.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            tag.style.transition = 'all 0.4s ease';
            tag.style.opacity = '1';
            tag.style.transform = 'translateY(0)';
        }, index * 50);
    });
};

// Observer pour déclencher l'animation quand la section est visible
const observeSkillsSection = () => {
    const skillsSection = document.querySelector('.skills');
    
    if (skillsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateSkillTags();
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.3
        });
        
        observer.observe(skillsSection);
    }
};

document.addEventListener('DOMContentLoaded', observeSkillsSection);





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