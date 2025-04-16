<div class="container mt-5">
    <div class="card mx-auto fs-5 shadow inscription" style="max-width: 600px;">
        <div class="card-body ">
            <h5 class="card-title text-center mb-4 fs-3">Inscription</h5>
            <!-- Formulaire d'inscription -->
            <form action="inscription" method="post" class="mb-3">
                <!-- Messages d'erreur et de succès -->
                <?php if (isset($_SESSION['error_message'])): ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['error_message']; ?></div>
                    <?php unset($_SESSION['error_message']); ?>
                <?php elseif (isset($_SESSION['success_message'])): ?>
                    <div class="alert alert-success"><?php echo $_SESSION['success_message']; ?></div>
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
            <form action="connexionPage" method="post">
                <button type="submit" class="btn btn-secondary w-100 animated-button">Se connecter</button>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let btnSeConnecter = document.querySelector(".inscription form + form button"); // Sélectionne le bouton "Se connecter"

        if (btnSeConnecter) {
            btnSeConnecter.addEventListener("click", function(event) {
                event.preventDefault(); // Empêche l'envoi immédiat
                let formContainer = document.querySelector(".inscription");

                formContainer.classList.add("shake-animation");

                setTimeout(() => {
                    formContainer.classList.remove("shake-animation");
                    btnSeConnecter.parentElement.submit(); // Envoie le formulaire après l'effet
                }, 450);
            });
        }
    });
</script>