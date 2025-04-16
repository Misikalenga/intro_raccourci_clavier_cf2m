<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Bouton navbar-toggler déplacé à droite -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex align-items-center">
                    <li class="nav-item self-end">
                        <a class=" nav-link text-end active fs-5 p-0" href="home"><img class=" w-25" src="Public\img\cf2m-removebg-preview.png" alt=""></a>
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
                    <!-- Connexion pour petits écrans -->
                    <li class="nav-item d-lg-none">
                        <a class="nav-link active fs-5" href="connexion">Connexion</a>
                    </li>
                </ul>
                <!-- Connexion pour grands écrans -->
                <ul class="navbar-nav d-flex align-items-center">
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