<?php
// Inclure le fichier de configuration de la base de données
require_once 'config/db.php';

// Récupération des projets depuis la base de données
$stmt = $pdo->prepare("SELECT * FROM projets");
$stmt->execute();
$projets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <base href="https://elbaz-sofiane.fr//">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ELBAZ Sofiane - Développeur Junior - Portfolio">
    <title>ELBAZ Sofiane - Portfolio</title>
    <link rel="stylesheet" href="asset/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <?php include 'include/header.php'; ?>

    <!-- Section Accueil / Hero -->
    <section id="accueil" class="hero">
        <div class="hero-content">
            <div class="hero-label">Portfolio 2026</div>
            <h1 class="hero-title">
                <span class="hero-name">ELBAZ</span>
                <span class="hero-name hero-name-accent">SOFIANE</span>
            </h1>
            <p class="hero-subtitle">Développeur Junior</p>
            
            <div class="hero-social">
                <a href="https://github.com/elbaz-sofiane" target="_blank" rel="noopener" class="social-link">
                    <svg class="social-icon" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    <span>GitHub</span>
                </a>
                <a href="https://www.linkedin.com/in/sofiane-elbaz" target="_blank" rel="noopener" class="social-link">
                    <svg class="social-icon" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                    <span>LinkedIn</span>
                </a>
<a href="asset/CV-Alternance.pdf" target="_blank" rel="noopener" class="social-link">
    <svg class="social-icon" viewBox="0 0 24 24" fill="currentColor">
        <!-- Document outline -->
        <path d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2Z" fill="currentColor" opacity="0.2"/>
        <path d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2Z" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
        
        <!-- Folded corner -->
        <path d="M14 2V8H20" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
        
        <!-- User icon -->
        <circle cx="12" cy="11" r="2" stroke="currentColor" stroke-width="1.5" fill="none"/>
        <path d="M9 16C9 14.9 10.3 14 12 14C13.7 14 15 14.9 15 16" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"/>
        
        <!-- Text lines -->
        <line x1="8" y1="18.5" x2="16" y2="18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
    </svg>
    <span>CV</span>
</a>
            </div>
        </div>
        
    </section>

    <!-- Section À propos -->
    <section id="apropos" class="about">
        <div class="container">
            <div class="section-header">
                <span class="section-number">01</span>
                <h2 class="section-title">À propos de moi</h2>
            </div>
            
            <div class="about-content">
                <div class="about-text">
                    <p class="about-intro">
                        Passionné par le développement web et les nouvelles technologies, 
                        je suis un développeur junior motivé et créatif, toujours en quête 
                        d'apprentissage et de nouveaux défis.
                    </p>
                    <p>
                        Ma curiosité naturelle et mon goût pour la résolution de problèmes 
                        me poussent à explorer constamment de nouvelles technologies et méthodologies. 
                        Je crois fermement en l'importance du code propre, de la collaboration 
                        et de l'amélioration continue.
                    </p>
                    <p>
                        Actuellement je suis en bts SIO (Services Informatiques aux Organisations) 
                        option SLAM (Solutions Logicielles et Applications Métiers) à l'école IRIS
                        de Paris, où j'ai acquis des compétences solides en développement web, gestion 
                        de bases de données et travail en équipe. Je suis à la recherche de nouvelles 
                        opportunités pour mettre en pratique mes compétences et contribuer à des projets innovants.
                    </p>
                    <p> Je suis actuellement à la recherche d'une alternance afin d'approfondir mes connaissances et 
                        enrichir mon expérience professionnelle.</p>
                </div>
                
                <div class="about-highlights">
                    <div class="highlight-item">
                        <div class="highlight-number">2+</div>
                        <div class="highlight-label">Années d'expérience</div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-number"><?php echo count($projets); ?>+</div>
                        <div class="highlight-label">Projets réalisés</div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-number">100%</div>
                        <div class="highlight-label">Engagement</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Compétences -->
    <section id="competences" class="skills">
        <div class="container">
            <div class="section-header">
                <span class="section-number">02</span>
                <h2 class="section-title">Compétences</h2>
            </div>
            
            <div class="skills-content">
                <div class="skills-chart">
                    <svg class="donut-chart" viewBox="0 0 200 200">
                        <!-- Background circle -->
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#1a1a1a" stroke-width="40"/>
                        
                        <!-- PHP 25% -->
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#8892B0" stroke-width="40"
                                stroke-dasharray="126 377" stroke-dashoffset="0" 
                                transform="rotate(-90 100 100)" class="chart-segment"/>
                        
                        <!-- JavaScript 30% -->
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#64FFDA" stroke-width="40"
                                stroke-dasharray="151 377" stroke-dashoffset="-126" 
                                transform="rotate(-90 100 100)" class="chart-segment"/>
                        
                        <!-- HTML/CSS 25% -->
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#CCD6F6" stroke-width="40"
                                stroke-dasharray="126 377" stroke-dashoffset="-277" 
                                transform="rotate(-90 100 100)" class="chart-segment"/>
                        
                        <!-- SQL 20% -->
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#E6F1FF" stroke-width="40"
                                stroke-dasharray="101 377" stroke-dashoffset="-403" 
                                transform="rotate(-90 100 100)" class="chart-segment"/>
                        
                        <!-- Center text -->
                        <text x="100" y="95" text-anchor="middle" class="chart-title">Stack</text>
                        <text x="100" y="110" text-anchor="middle" class="chart-subtitle">Technique</text>
                    </svg>
                </div>
                
                <div class="skills-list">
                    <div class="skill-category">
                        <h3 class="category-title">Frontend</h3>
                        <div class="skill-tags">
                            <span class="skill-tag" style="--color: #CCD6F6">HTML5</span>
                            <span class="skill-tag" style="--color: #CCD6F6">CSS3</span>
                            <span class="skill-tag" style="--color: #64FFDA">JavaScript</span>
                        </div>
                    </div>
                    
                    <div class="skill-category">
                        <h3 class="category-title">Backend</h3>
                        <div class="skill-tags">
                            <span class="skill-tag" style="--color: #8892B0">PHP</span>
                            <span class="skill-tag" style="--color: #8892B0">MySQL</span>
                        </div>
                    </div>
                    
                    <div class="skill-category">
                        <h3 class="category-title">Outils</h3>
                        <div class="skill-tags">
                            <span class="skill-tag" style="--color: #64FFDA">Git</span>
                            <span class="skill-tag" style="--color: #8892B0">GitHub</span>
                            <span class="skill-tag" style="--color: #CCD6F6">VS Code</span>
                            <span class="skill-tag" style="--color: #E6F1FF">MySQL</span>
                            <span class="skill-tag" style="--color: #E6F1FF">VM Ware</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projets -->
    <section id="projets" class="projects">
        <div class="container">
            <div class="section-header">
                <span class="section-number">03</span>
                <h2 class="section-title">Projets</h2>
            </div>
            
            <div class="projects-grid">
                <?php 
                // Vérifier si des projets existent
                if (!empty($projets)) {
                    $index = 0;
                    foreach ($projets as $projet) {
                        $index++;
                        // Préparer les langages dans un tableau
                        $languages = [];
                        for ($i = 1; $i <= 5; $i++) {
                            $lang_key = "language_$i";
                            if (!empty($projet[$lang_key])) {
                                $languages[] = $projet[$lang_key];
                            }
                        }
                        // Ajouter une classe pour masquer les projets après le 4ème sur mobile
                        $hiddenClass = $index > 2 ? ' project-hidden' : '';
                ?>
                <article class="project-card<?php echo $hiddenClass; ?>" data-index="<?php echo $index; ?>">
                    <div class="project-image">
                        <?php if (!empty($projet['Image'])): ?>
                            <img src="<?php echo htmlspecialchars($projet['Image']); ?>" alt="<?php echo htmlspecialchars($projet['Titre']); ?>">
                        <?php else: ?>
                            <div class="project-placeholder">
                                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <rect x="3" y="3" width="18" height="18" rx="2" stroke-width="2"/>
                                    <path d="M3 9h18M9 21V9" stroke-width="2"/>
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title"><?php echo htmlspecialchars($projet['Titre']); ?></h3>
                        <p class="project-description">
                            <?php echo htmlspecialchars($projet['Description']); ?>
                        </p>
                        <div class="project-tags">
                            <?php foreach ($languages as $language): ?>
                                <span class="project-tag"><?php echo htmlspecialchars($language); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo htmlspecialchars($projet['lien']); ?>" class="project-link" target="_blank" rel="noopener">
                            Voir le projet →
                        </a>
                        
                        <?php if (!empty($projet['lien_demo'])): ?>
                                <a href="<?php echo htmlspecialchars($projet['lien_demo']); ?>" class="project-link project-link-demo" target="_blank" rel="noopener">
                                    Lien de démo →
                                </a>
                            <?php endif; ?>
                    </div>
                </article>
                <?php 
                    }
                } else {
                    // Afficher un message si aucun projet n'est disponible
                    echo '<p class="no-projects">Aucun projet disponible pour le moment.</p>';
                }
                ?>
            </div>
            
            <?php if (!empty($projets) && count($projets) > 2): ?>
            <div class="projects-actions">
                <button id="toggleProjects" class="btn-show-more">
                    <span class="btn-text">Voir plus de projets</span>
                    <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <polyline points="6 9 12 15 18 9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <?php endif; ?>
            
            <br>
            <a class="github-link" href="https://github.com/elbaz-sofiane?tab=repositories"><p class="github-link">Découvrez tous mes projets sur mon GitHub</p></a>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-number">04</span>
                <h2 class="section-title">Contact</h2>
            </div>
            
            <div class="contact-content">
                <div class="contact-info">
                    <h3 class="contact-subtitle">Travaillons ensemble</h3>
                    <p class="contact-text">
                        Je suis actuellement à la recherche de nouvelles opportunités. 
                        Que vous ayez une question ou souhaitiez simplement discuter, 
                        n'hésitez pas à me contacter.
                    </p>
                    
                    <div class="contact-links">
                        <a href="mailto:sofiane.elbaz@example.com" class="contact-link-item">
                            <svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke-width="2"/>
                                <polyline points="22,6 12,13 2,6" stroke-width="2"/>
                            </svg>
                            <span>sofiane.elbaz1@icloud.com</span>
                        </a>
                        
                        <a href="https://github.com/elbaz-sofiane" target="_blank" class="contact-link-item">
                            <svg class="contact-icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            <span>github.com/elbaz-sofiane</span>
                        </a>
                        
                        <a href="https://www.linkedin.com/in/sofiane-elbaz" target="_blank" class="contact-link-item">
                            <svg class="contact-icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                            <span>linkedin.com/in/sofiane-elbaz</span>
                        </a>
                        
                        <a href="/asset/CV-Alternance.pdf" download class="contact-link-item">
                            <svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <polyline points="7 10 12 15 17 10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <line x1="12" y1="15" x2="12" y2="3" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            <span>Télécharger mon CV</span>
                        </a>
                    </div>
                </div>
                
                <!-- a faire plus tard le form ( ne pas oublie de reactiver le '.contact-content' dans le css)
                
                 /*
.contact-content {
    display: grid;
     grid-template-columns: 1fr 1fr;  c le separateur pour le form         
    gap: 6rem;
}
*/

ajt ca au style
                
                <form class="contact-form" action="contact.php" method="POST">
                    <div class="form-group">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" rows="5" class="form-input form-textarea" required></textarea>
                    </div>
                    
                    <button type="submit" class="form-submit" name="submit">
                        <span>Envoyer le message</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <line x1="5" y1="12" x2="19" y2="12" stroke-width="2"/>
                            <polyline points="12 5 19 12 12 19" stroke-width="2"/>
                        </svg>
                    </button>
                </form>
-->

                
            </div>
        </div>
    </section>

    <!-- Footer -->
<?php include 'include/footer.php'; ?>

    <script src="/asset/script/script.js"></script>
    <script src="/asset/script/projects-toggle.js"></script>
</body>
</html>