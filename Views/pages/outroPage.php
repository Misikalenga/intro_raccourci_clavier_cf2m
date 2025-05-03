<div class="container mt-5 text-center">
    <?php
    if (isset($_SESSION['error_message'])) {
        echo '<div class="alert alert-danger" role="alert">' . htmlspecialchars($_SESSION['error_message']) . '</div>';
        unset($_SESSION['error_message']);
    }

    ?>
    <h1 class="display-4">🎉 Félicitations !</h1>
    <p class="lead mt-3">Vous avez terminé tous les exercices du module sur les raccourcis clavier Windows & VSCode.</p>

    <div class="my-4 text-start">
        <h4>✅ Compétences acquises :</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Naviguer et éditer du texte sans utiliser la souris (Presque..)</li>
            <li class="list-group-item">Gagner du temps grâce à la duplication, la sélection rapide et le déplacement de lignes</li>
            <li class="list-group-item">Commenter et décommenter intelligemment plusieurs lignes de code</li>
            <li class="list-group-item">Basculer efficacement entre fenêtres, onglets et bureaux virtuels</li>
            <li class="list-group-item">Utiliser le terminal et les outils de développement sans toucher à la souris</li>
            <li class="list-group-item">Gérer des fichiers, documents ou projets avec une rapidité professionnelle</li>
            <li class="list-group-item">Travailler efficacement dans VS Code avec des raccourcis adaptés aux développeurs</li>
        </ul>
    </div>



    <div class="mt-5">
        <p class="text-muted">Entraînez-vous régulièrement pour solidifier vos automatismes.</p>
    </div>


    <!-- Formulaire pour avis -->
    <div class="my-5 text-start">
        <h4>💬 Donnez votre avis :</h4>
        <form method="POST" action="submitComment">
            <div class="mb-3">
                <label class="form-label"><?= $_SESSION['user'] ?></label><br>
                <label for="comment" class="form-label">Votre commentaire :</label>
                <textarea name="comment" id="comment" class="form-control border border-1 border-dark" rows="4" placeholder="Partagez votre avis ou suggestions ici..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>

    <div class="my-5">
        <a href="training" class="btn btn-primary btn-lg me-2">🔁 Refaire les exercices</a>
        <a href="home" class="btn btn-success btn-lg">🚀 Retournez à l'accueil</a>
    </div>
</div>