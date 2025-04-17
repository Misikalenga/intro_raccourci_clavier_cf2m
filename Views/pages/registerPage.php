<div class="container mt-5">
    <!-- Card avec comportement responsive -->
    <div class="card mx-auto fs-5 shadow inscription col-12 col-lg-4">
        <div class="card-body">
            <h5 class="card-title text-center mb-4 fs-3">Inscription</h5>
            <!-- Formulaire d'inscription -->
            <form action="inscription" method="post" class="mb-3">
                <!-- Messages d'erreur et de succès -->
                <?php if (isset($_SESSION['error_message'])): ?>
                    <div style="font-size: 1rem;" class="alert alert-danger text-center"><?php echo $_SESSION['error_message']; ?></div>
                    <?php unset($_SESSION['error_message']); ?>
                <?php elseif (isset($_SESSION['success_message'])): ?>
                    <div style="font-size: 1rem;" class="alert alert-success text-center"><?php echo $_SESSION['success_message']; ?></div>
                    <?php unset($_SESSION['success_message']); ?>
                <?php endif; ?>

                <!-- Champ Nom d'utilisateur -->
                <div class="mb-3">
                    <label for="user" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Entrez votre identifiant" required>
                </div>

                <!-- Champ Mot de passe -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                </div>

                <!-- Bouton Inscription -->
                <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
            </form>

            <!-- Bouton pour se connecter -->
            <form action="connexionPage" method="post" style="text-align: center; margin-top: 15px;">
                <button type="submit" class="btn btn-link" style="background: none; border: none; color: #007BFF; text-decoration: underline; padding: 0; font-size: 16px; cursor: pointer;">
                    Déjà inscrit ? Se connecter
                </button>
            </form>
        </div>
    </div>
</div>