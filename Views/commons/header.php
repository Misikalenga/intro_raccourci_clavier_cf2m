<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Bouton navbar-toggler déplacé à droite -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Liste des éléments de navigation -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active fs-5 p-0" href="home"><img class="w-25" src="Public/img/cf2m-removebg-preview.png" alt="Logo"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="intro">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="training">Pratique</a>
                    </li>
                </ul>
                <!-- Connexion -->
                <ul class="navbar-nav d-flex align-items-start">
                    <?php if (isset($_SESSION['user']) && $_SESSION['user'] !== "lambda"): ?>
                        <li class="nav-item" style="width:250px"><a href="destroy" class="text-decoration-none text-dark"><b class="fst-italic">Bonjour, <?php echo $_SESSION['user']; ?></b> <br> Déconnexion</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a href="connexionPage" class="text-decoration-none text-dark">Connexion</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>