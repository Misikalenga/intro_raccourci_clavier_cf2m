<div class="container mt-5">
    <div class="card mx-auto shadow fs-5 connexion" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4 fs-3">Connexion</h5>
            <!-- Formulaire de connexion -->

            <form action="connexion" method="post" class="mb-3">
                <?php if (isset($_SESSION['success_message'])): ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success_message']; ?>
                    </div>
                    <?php elseif(!empty($_SESSION['error_message'])): ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['error_message']; ?></div>
                    <?php unset($_SESSION['error_message']); ?>
                    <?php unset($_SESSION['success_message']); ?> <!-- Supprime après affichage -->
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
            <form action="inscriptionPage" method="post">
                <button type="submit" class="btn btn-secondary w-100">S'inscrire</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let btnInscription = document.querySelector(".card-body form + form button"); // Sélectionne le bouton "S'inscrire"

        if (btnInscription) {
            btnInscription.addEventListener("click", function(event) {
                event.preventDefault(); // Empêche l'envoi immédiat
                let formContainer = document.querySelector(".connexion");

                formContainer.classList.add("shake-animation");

                setTimeout(() => {
                    formContainer.classList.remove("shake-animation");
                    btnInscription.parentElement.submit(); // Envoie le formulaire après l'effet
                }, 450);
            });
        }
    });
</script>