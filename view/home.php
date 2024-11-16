<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGTech</title>
    
    <!-- Feuilles de style externes -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Lexend+Giga:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Scripts externes -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <!-- En-tête avec la navbar -->
    <header>
        <video autoplay muted loop style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; object-fit: cover; z-index: -1;">
            <source src="../assets/video/videofond.mp4" type="video/mp4">
            Votre navigateur ne supporte pas les vidéos.
        </video>

        <nav class="navbar mx-5 my-3">
            <div class="container-fluid">
                <a class="navbar-mark" href="#">PGTech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="width: 50px; height: 50px;"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Accueil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="header-text-block"><p class="header-text">L'art du web au service de votre succès</p></div>
        <div class="button-container">
            <button class="gradient-button">
                <span class="button-text">En savoir plus</span>
            </button>
        </div>
    </header>


    <main>

        <div class="main-block-about">
            <div class="main-block-video">
            <video autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                <source src="../assets/video/videoabout.mp4" type="video/mp4">
                Votre navigateur ne supporte pas les vidéos.
            </video>
            </div>
            <div class="main-block-text"> 
                <h2>PGTech <br> Simplicité, efficacité, confiance !</h2>
                <p>Chez PGTech, je fait les choses simplement et efficacement. Pas de blabla, pas de promesses irréalistes,
                    juste du travail de qualité. Bien que mon agence soit jeune, J'ai l'audace et la détermination nécessaires
                    pour réussir n'importe quel projet. Je suis prêt à vous offrir des solutions sur mesure, adaptées à vos
                    besoins réels, et ce, avec une seule ambition : votre satisfaction.
                </p>
            </div>
        </div>

        <div class="main-block-services">
            <h1>Ce que je vous propose</h1>
            <div class="services-container">
                <!-- Bloc Développement sur mesure -->
                <div class="service-item">
                    <a href="page-dev-sur-mesure.html" class="service-link">
                        <img src="..\assets\img\imgdev.jpg" alt="Développement sur mesure">
                        <div class="service-item-title">
                            <h2>Développement sur mesure</h2>
                        </div>
                        <div class="service-item-redirection">
                            <span class="plus-sign">+</span>
                        </div>
                    </a>
                </div>
                <!-- Bloc Développement via CMS (WordPress, Shopify) -->
                <div class="service-item">
                    <a href="page-cms.html" class="service-link">
                        <img src="..\assets\img\imgceo.jpg" alt="Développement via CMS">
                        <div class="service-item-title">
                            <h2>Développement via CMS</h2>
                        </div>
                        <div class="service-item-redirection">
                            <span class="plus-sign">+</span>
                        </div>
                    </a>
                </div>
                <!-- Bloc Accompagnement/Conseil -->
                <div class="service-item">
                    <a href="page-accompagnement.html" class="service-link">
                        <img src="..\assets\img\imgacc.jpg" alt="Accompagnement et Conseil">
                        <div class="service-item-title">
                            <h2>Accompagnement et Conseil</h2>
                        </div>
                        <div class="service-item-redirection">
                            <span class="plus-sign">+</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="main-block-portfolio">
            <h1>Mes Réalisations</h1>
            <div class="portfolio-container">
                <!-- Bloc Projet 1 -->
                <a href="page-projet1.html" class="project-item">
                    <div class="image-container">
                        <div class="separator-line"></div>
                        <div class="image-wrapper">
                            <img src="..\assets\img\Capture d'écran 2024-05-11 173739.png" alt="Projet 1">
                        </div>
                    </div>
                    <div class="content-container">
                        <div class="content-wrapper">
                            <h2>Projet Delta-car</h2>
                            <span class="arrow">&#8594;</span>
                        </div>
                    </div>
                </a>
                <!-- Bloc Projet 2 -->
                <a href="page-projet2.html" class="project-item">
                    <div class="image-container">
                        <div class="separator-line"></div>
                        <div class="image-wrapper">
                            <img src="..\assets\img\aucun-visuel-PB.jpg" alt="Projet 2">
                        </div>
                    </div>
                    <div class="content-container">
                        <div class="content-wrapper">
                            <h2>Projet à Venir</h2>
                            <span class="arrow">&#8594;</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="wrapper">
                <div class="link_wrapper">
                    <a href="toutes-les-realisations.html"> Voir toutes mes réalisations </a>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
                            <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-to-action">
            <div class="cta-block">
                <h2 class="cta-title bold">Un projet en tête ?</h2>
            </div>
            <div class="cta-block">
                <h2 class="cta-title light">Parlons-en dès aujourd'hui !</h2>
            </div>
            <div class="cta-block">
                <p class="cta-description">
                Votre projet mérite une attention particulière et une expertise dédiée. Contactez-nous pour découvrir comment PGTech peut concrétiser vos ambitions digitales avec efficacité et créativité.
                </p>
            </div>
            <div class="cta-btn-wrapper">
                <a href="/contact" class="cta-btn">
                Contactez-nous
                </a>
            </div>
        </div>

    </main>
    <footer>
        
    </footer>
</body>
</html>
