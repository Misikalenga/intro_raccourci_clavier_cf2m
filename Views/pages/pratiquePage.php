<?php
// Logique AJAX pour la gestion des réponses
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajax'])) {
    $editorId = $_POST['editorId'];  // Identifiant de la zone de texte
    $valeurEntree = trim($_POST["editorValue"]);
    $reponse = ['etat' => 'error', 'message' => 'Valeur incorrecte ❌'];

    // Exemple de valeurs attendues différentes pour chaque zone de texte
    $valeursAttendues = [
        'editor' => [
            "<button class=\"btn btn-primary\">Clique ici</button>" => "Bonne réponse ✅",
        ],
        'editor1' => [
            "Je suis un" => "Bonne réponse ✅",
        ],
        'editor2' => [
            "Je suis un texte." => "Bonne réponse ✅",
        ],
        'editor3' => [
            "Lorem" => "Bonne réponse ✅"
        ],
        'editor4' => [
            "Félicitations, tu as réussi !" => "Bonne réponse ✅"
        ]
    ];

    // Comparaison strictement par zone
    if (isset($valeursAttendues[$editorId])) {
        foreach ($valeursAttendues[$editorId] as $attendu => $message) {
            if (trim($valeurEntree) === trim($attendu)) {
                $reponse['etat'] = 'success';
                $reponse['message'] = $message;
                break;
            }
        }
    }

    // Réponse JSON
    header('Content-Type: application/json');
    echo json_encode($reponse);
    exit;
}
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gère la soumission AJAX pour chaque bouton de validation
        document.querySelectorAll('.btn-valider').forEach(button => {
            button.addEventListener('click', function() {
                const editorId = this.getAttribute('data-editor');
                const editorValue = document.getElementById(editorId).value;

                // Envoi de la requête AJAX
                fetch('', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: new URLSearchParams({
                            editorId: editorId,
                            editorValue: editorValue,
                            ajax: '1'
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        const resultDiv = document.getElementById('result-' + editorId);
                        resultDiv.innerHTML = data.message;
                        resultDiv.className = data.etat === 'success' ? 'text-success fw-bold' : 'text-danger fw-bold';
                    });
            });
        });
    });
</script>


<div class="container py-5">
    <h1 class="text-center">Pratique sur zone de texte</h1>
    <div class="alert d-flex justify-content-center" style="margin: 2rem auto; text-align: center;">

        <aside class="text-center border rounded p-4 w-75" style="background-color: #cccccc; font-weight: bold; border-width: 1px; ">
            <strong>⚠️ Attention :</strong> La triche ne sert à rien ! Prenez le temps de suivre les étapes avec sérieux. Les raccourcis clavier que vous apprendrez ici sont essentiels dans le développement web et vous feront gagner en efficacité. Jouez le jeu, car maîtriser ces outils est un véritable atout pour travailler rapidement et intelligemment.
        </aside>
    </div>

    <!-- Exercice 1 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 1.0 : Couper, Copier, Coller</h4>
            <ol class="mb-0">
                <li>Entrez dans la zone de texte.</li>
                <li>Sélectionnez le texte → <code>&lt;Je suis un texte&gt;</code> avec <kbd>Ctrl + A</kbd>.</li>
                <li>Coupez le texte avec <kbd>Ctrl + X</kbd>.</li>
                <li>Copiez cette ligne :
                    <code>&lt;button class="btn btn-primary"&gt;Clique ici&lt;/button&gt;</code>
                    avec <kbd>Ctrl + C</kbd>.
                </li>
                <li>Collez-la ci-dessous avec <kbd>Ctrl + V</kbd>.</li>
            </ol>
        </div>
    </div>

    <!-- Zone de texte 1 -->
    <div class="mb-3 zone_edition">
        <label for="editor" class="form-label">🧪 Zone d'édition</label>
        <textarea class="form-control shadow border border-dark editor h-50 mb-3" name="editor" id="editor">Je suis un texte</textarea>

        <div class="d-flex align-items-center gap-3">
            <button type="button" class="btn btn-primary btn-valider" data-editor="editor">Valider</button>
            <div id="result-editor" class="fw-bold"></div>
        </div>
    </div>
    <hr style="height: 5px; background-color: black; margin: 3rem 0;">
    <!-- Exercice 2 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 1.1 : Annuler et Rétablir</h4>
            <ol class="mb-0">
                <li>Selectionnez et supprimer le mot <b>"text"</b> avec <kbd>BACKSPACE</kbd></li>
                <li>Utilisez <kbd>Ctrl + Z</kbd> pour <strong>annuler</strong> la suppression.</li>
                <li>Utilisez <kbd>Ctrl + Y</kbd> pour <strong>rétablir</strong> la suppression.</li>
            </ol>
        </div>
    </div>

    <!-- Zone de texte 2 -->
    <div class="mb-3 zone_edition">
        <label for="editor1" class="form-label">🧪 Zone d'édition</label>
        <textarea class="form-control shadow border border-dark editor h-50 mb-3" name="editor1" id="editor1">Je suis un texte</textarea>

        <div class="d-flex align-items-center gap-3">
            <button type="button" class="btn btn-primary btn-valider" data-editor="editor1">Valider</button>
            <div id="result-editor1" class="fw-bold"></div>
        </div>
    </div>
    <hr style="height: 5px; background-color: black; margin: 3rem 0;">
    <!-- Exercice 3 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 1.2 : Naviguer et Sélectionner</h4>
            <ol class="mb-0">
                <li>Entrez dans la zone de texte.</li>
                <li>Utilisez <kbd>Ctrl + →</kbd> ou <kbd>←</kbd> pour déplacer le curseur d'un mot à l'autre.</li>
                <li>Utilisez <kbd>Shift + →</kbd> ou <kbd>←</kbd> pour sélectionner du texte caractère par caractère.</li>
                <li>Utilisez <kbd>Ctrl + Shift + →</kbd> ou <kbd>←</kbd> pour sélectionner et supprimer le texte <b>"Mais pas que, je suis un ensemble lettres et de mots qui forme un texte."</b> avec <kbd>BACKSPACE</kbd></li>
            </ol>
        </div>
    </div>

    <!-- Zone de texte 3 -->
    <div class="mb-3 zone_edition">
        <label for="editor2" class="form-label">🧪 Zone d'édition</label>
        <textarea class="form-control shadow border border-dark editor h-50 mb-3" name="editor2" id="editor2">Je suis un texte. Mais pas que, je suis un ensemble lettres et de mots qui forme un texte.</textarea>

        <div class="d-flex align-items-center gap-3">
            <button type="button" class="btn btn-primary btn-valider" data-editor="editor2">Valider</button>
            <div id="result-editor2" class="fw-bold"></div>
        </div>
    </div>
    <hr style="height: 5px; background-color: black; margin: 3rem 0;">
    <!-- Exercice 4 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 1.3 : Supprimer et Sélectionner</h4>
            <ol class="mb-0">
                <li>Entrez dans la zone de texte.</li>
                <li>Utilisez <kbd>Ctrl + BACKSPACE</kbd> pour supprimer mot par mot.</li>
                <li>Vous pouvez également vous placer à la fin du curseur et utiliser <kbd>Shift + Click</kbd> à l'endroit où vous voulez sélectionner le texte.</li>
                <li>Arrangez vous pour qu'il ne reste que <b>"Lorem"</b>.</li>
            </ol>
        </div>
    </div>

    <!-- Zone de texte 4 -->
    <div class="mb-3 zone_edition">
        <label for="editor3" class="form-label">🧪 Zone d'édition</label>
        <textarea class="form-control shadow border border-dark editor h-50 mb-3" name="editor3" id="editor3">Lorem ipsum dolor sit amet.</textarea>

        <div class="d-flex align-items-center gap-3">
            <button type="button" class="btn btn-primary btn-valider" data-editor="editor3">Valider</button>
            <div id="result-editor3" class="fw-bold"></div>
        </div>
    </div>
    <hr style="height: 5px; background-color: black; margin: 3rem 0;">
    <!-- Exercice 5 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 1.4 : Nettoyer le Texte</h4>
            <ol class="mb-0">
                <li>
                    <span>Le texte dans la zone d'édition est rempli de caractères parasites. Votre mission : utiliser les raccourcis clavier pour nettoyer la zone de texte sans utiliser la souris. Vous avez le droit à une touche souris pour entrer dans la zone de texte.</span>
                </li>
                <li>À l'aide de ces raccourcis
                    <kbd>Ctrl + A</kbd>, <kbd>Ctrl + X</kbd>, <kbd>Ctrl + C</kbd>, <kbd>Ctrl + V</kbd>, <kbd>Backspace</kbd>, <kbd>Ctrl + Z</kbd>, <kbd>Ctrl + Y</kbd>, <kbd>Ctrl + →</kbd>, <kbd>Ctrl + ←</kbd>, <kbd>Shift + →</kbd>, <kbd>Shift + ←</kbd>, <kbd>Ctrl + Shift + →</kbd>, <kbd>Ctrl + Shift + ←</kbd>, <kbd>Ctrl + Backspace</kbd>, et <kbd>Shift + Click</kbd>,
                    trouvez le moyen d'afficher le texte suivant : <code>Félicitations, tu as réussi !</code>.
                </li>
                <li>Utilisez le chronomètre pour vous challengez, le record actuel est de <kbd>01:38:245</kbd> Evidemment, il ne sera pas possible de le battre...</li>
            </ol>
        </div>
    </div>

    <!-- Zone de texte 5 -->
    <div class="mb-3 zone_edition">
        <label for="editor4" class="form-label">🧪 Zone d'édition</label>
        <textarea class="form-control shadow border border-dark editor h-50 mb-3" name="editor4" id="editor4">tzu Daondez, czopyiexz ccettex liagne: "<butztonez czlass="btn pzimary">cliquex içi</butztone>", zxupprimezx rxeussxzxi une zxpartix dux Fzéoliciatxztionxs, texxte avzec! backsppzacezx, zxannulezx zxette aqs xpartx zavec ctrz+zz zx.</textarea>

        <div class="d-flex align-items-center gap-3">
            <button type="button" class="btn btn-primary btn-valider" data-editor="editor4">Valider</button>
            <div id="result-editor4" class="fw-bold"></div>
        </div>
    </div>
    <div class="container mt-3">
        <!-- Chronomètre avec Bootstrap -->
        <div class="row align-items-center">
            <div class="col-auto">
                <p class="fw-bold fs-5 m-0">⏱ Temps :</p>
            </div>
            <div class="col-auto">
                <p id="timer" class="fs-5 m-0">00:00:000</p>
            </div>
            <div class="col-auto">
                <button id="startStopButton" class="btn btn-primary me-2">Démarrer</button>
                <button id="resetButton" class="btn btn-secondary">Réinitialiser</button>
            </div>
        </div>
    </div>

    <hr style="height: 5px; background-color: black; margin: 3rem 0;">
    <div class="container mt-4 d-flex text-center justify-content-center gap-2">
        <button type="button" class="btn btn-primary" onclick="window.location.href='intro'">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </button>

        <button type="button" class="btn btn-primary" onclick="window.location.href='navigation'">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </button>
    </div>

</div>
</div>




<script>
    let timerInterval = null;
    let milliseconds = 0;
    let isRunning = false;

    // Fonction pour formater le temps (MM:SS:ms)
    function formatTime(ms) {
        const minutes = Math.floor(ms / 60000).toString().padStart(2, '0');
        const seconds = Math.floor((ms % 60000) / 1000).toString().padStart(2, '0');
        const milli = (ms % 1000).toString().padStart(3, '0');
        return `${minutes}:${seconds}:${milli}`;
    }

    // Mettre à jour l'affichage du chronomètre
    function updateTimer() {
        document.getElementById('timer').textContent = formatTime(milliseconds);
    }

    // Démarrer ou arrêter le chronomètre
    document.getElementById('startStopButton').addEventListener('click', function() {
        if (isRunning) {
            // Arrêter le chronomètre
            clearInterval(timerInterval);
            timerInterval = null;
            isRunning = false;
            this.textContent = 'Démarrer'; // Changer le texte du bouton
        } else {
            // Démarrer le chronomètre
            const startTime = Date.now() - milliseconds; // Ajuster le démarrage
            timerInterval = setInterval(() => {
                milliseconds = Date.now() - startTime;
                updateTimer();
            }, 10); // Mise à jour toutes les 10 ms
            isRunning = true;
            this.textContent = 'Arrêter'; // Changer le texte du bouton
        }
    });

    // Réinitialiser le chronomètre
    document.getElementById('resetButton').addEventListener('click', function() {
        clearInterval(timerInterval);
        timerInterval = null;
        milliseconds = 0;
        isRunning = false;
        updateTimer();
        document.getElementById('startStopButton').textContent = 'Démarrer'; // Remettre le texte du bouton
    });
</script>