<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">Inscription</h5>
            <!-- Formulaire de connexion -->
            <form action="/connexion" method="post" class="mb-3">
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control form-control-lg" id="login" name="login" placeholder="Entrez votre identifiant">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Entrez votre mot de passe">
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100">S'inscrire</button>
            </form>

            <!-- Formulaire d'inscription -->
            <form action="/inscription" method="post">
                <button type="submit" class="btn btn-secondary btn-lg w-100">Se connecter</button>
            </form>
        </div>
    </div>
</div>