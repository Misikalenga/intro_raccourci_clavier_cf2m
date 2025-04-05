<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">Inscription</h5>
            <!-- Formulaire d'inscription -->
            <form action="inscription" method="post" class="mb-3">
                <div class="mb-3">
                    <label for="user" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Entrez votre identifiant" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
            </form>

            <!-- Bouton pour se connecter -->
            <form action="connexion" method="post">
                <button type="submit" class="btn btn-secondary w-100">Se connecter</button>
            </form>
        </div>
    </div>
</div>