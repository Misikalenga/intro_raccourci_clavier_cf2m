<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">Connexion</h5>
            <!-- Formulaire de connexion -->
            <form action="connexion" method="post" class="mb-3">
                <div class="mb-3">
                    <label for="login" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre identifiant">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe">
                </div>
                <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            </form>

            <!-- Formulaire d'inscription -->
            <form action="inscriptionPage" method="post">
                <button type="submit" class="btn btn-secondary w-100">S'inscrire</button>
            </form>
        </div>
    </div>
</div>