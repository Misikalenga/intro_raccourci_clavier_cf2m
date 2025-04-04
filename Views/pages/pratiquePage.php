<div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
    <!-- Titre placé en haut -->
    <h1 class="text-center mb-5">Pratique</h1>

    <!-- Formulaire centré verticalement -->
    <form class="d-flex flex-column align-items-center gap-3">
        <!-- Label descriptif pour l'exercice -->
        <label for="copiemoi" class="form-label">
            Je voudrais que tu copies le texte "Copie moi" dans le premier champ et que tu le colles dans le second champ de texte à l'aide des raccourcis clavier <strong>Ctrl+C</strong> et <strong>Ctrl+V</strong>.
        </label>

        <!-- Conteneur des inputs et bouton -->
        <div class="d-flex align-items-center gap-3">
            <!-- Input pour copier -->
            <input id="copiemoi" type="text" class="form-control" value="Copie moi" style="max-width: 200px;">

            <!-- Flèche décorative -->
            <span class="fs-3">➡️</span>

            <!-- Input pour coller -->
            <input id="collemoi" type="text" class="form-control" style="max-width: 200px;">

            <!-- Bouton qui sera remplacé par le V -->
            <button id="btncopiecolle" type="button" class="btn btn-primary">Test</button>

            <!-- Résultat de validation (V vert) -->
            <span id="checkmark" style="color: green; font-size: 1.5rem; display: none; transition: all 0.5s;">✅</span>
        </div>
    </form>
</div>

<script>
    // Récupération des éléments HTML
    const copiemoi = document.getElementById('copiemoi');
    const collemoi = document.getElementById('collemoi');
    const btncopiecolle = document.getElementById('btncopiecolle');
    const checkmark = document.getElementById('checkmark');

    // Gestionnaire d'événement pour le bouton
    btncopiecolle.addEventListener('click', () => {
        if (copiemoi.value === collemoi.value) {
            // Si les valeurs correspondent
            checkmark.style.display = 'inline'; // Affiche le ✅
            btncopiecolle.style.display = 'none'; // Cache le bouton
        } else {
            // Si les valeurs ne correspondent pas
            btncopiecolle.style.backgroundColor = 'red';
            btncopiecolle.style.color = 'white';
            checkmark.style.display = 'none'; // Cache le ✅
        }
    });
</script>
