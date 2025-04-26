<div class="container mt-5 text-center">

    <h1 class="mb-5">Bienvenue dans le module d'introduction de la pré-formation consacré aux raccourcis clavier</h1>
    <!-- Bouton avec flèche -->
    <button type="button" class="btn btn-primary">
        <a class="text-white text-decoration-none" href="intro">
            Cliquez ici
        </a>
        <span class="ms-2">&rarr;</span> <!-- Flèche ajoutée -->
    </button>
<div class="mt-5">
<?php if (isset($_SESSION['success_message'])) {
        echo '<div class="alert alert-success" role="alert">' . htmlspecialchars($_SESSION['success_message']) . '</div>';
        unset($_SESSION['success_message']);
    } ?>
</div>
</div>