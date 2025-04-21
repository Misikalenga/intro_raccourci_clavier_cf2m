<div class="container mt-5">
    <!-- Card avec comportement responsive -->
    <div class="card mx-auto shadow fs-5 connexion col-12 col-lg-4">
        <div class="card-body card-form">
            <h5 class="card-title text-center mb-4 fs-3 text-shadow">Connexion</h5>
            <!-- Formulaire de connexion -->
            <form action="connexion" method="post" class="mb-3">
                <?php if (isset($_SESSION['success_message'])): ?>
                    <div style="font-size: 1rem;" class="alert alert-success text-center">
                        <?php echo $_SESSION['success_message']; ?>
                    </div>
                <?php elseif(!empty($_SESSION['error_message'])): ?>
                    <div style="font-size: 1rem;" class="alert alert-danger text-center"><?php echo $_SESSION['error_message']; ?></div>
                    <?php unset($_SESSION['error_message']); ?>
                    <?php unset($_SESSION['success_message']); ?>
                <?php endif; ?>

                <div class="mb-3">
                    <label for="login" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre identifiant" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            </form>

            <!-- Formulaire d'inscription -->
            <form action="inscriptionPage" method="post" style="text-align: center; margin-top: 15px;">
                <button type="submit" class="btn btn-link" style="background: none; border: none; color: #007BFF; text-decoration: underline; padding: 0; font-size: 16px; cursor: pointer;">
                    Pas encore inscrit ? S'inscrire
                </button>
            </form>
        </div>
    </div>
</div>