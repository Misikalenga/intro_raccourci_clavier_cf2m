<style>
    html,
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        overflow-y: hidden;
        scroll-snap-type: y mandatory;
    }
</style>

<?php
// Tableau des exercices
$exercises = [
    [
        'title' => 'Exercice 1.5 : Ouvrir une page internet et Explorer des fichiers',
        'steps' => [
            'Ouvrez la boîte de dialogue "Exécuter" avec <kbd>Win + R</kbd>.',
            'Tapez <code class="fs-5">"chrome"</code> et appuyez sur <kbd>Entrée</kbd> pour ouvrir le navigateur Chrome.',
            'Retournez sur votre bureau en utilisant <kbd>Win + D</kbd>.',
            'Ouvrez une nouvelle fenêtre de l\'Explorateur de fichiers avec <kbd>Ctrl + N</kbd>.'
        ]
    ],
    [
        'title' => 'Exercice 1.6 : Manipuler plusieurs onglets',
        'steps' => [
            'Utilisez <kbd>Alt + Tab</kbd> pour basculer vers la fenêtre Chrome.',
            'Ouvrez un nouvel onglet dans Chrome avec <kbd>Ctrl + T</kbd>.',
            'Répétez cette action jusqu\'à avoir **4 onglets ouverts au total**.',
            'Naviguez entre les onglets avec <kbd>Ctrl + Tab</kbd>.'
        ]
    ],
    [
        'title' => 'Exercice 1.7 : Gérer et restaurer des onglets',
        'steps' => [
            'Sélectionnez un des onglets ouverts et accédez à Google en tapant l\'URL dans la barre d\'adresse.',
            'Fermez cet onglet avec <kbd>Ctrl + W</kbd>.',
            'Rouvrez l\'onglet fermé avec <kbd>Ctrl + Shift + T</kbd>.',
            'Fermez tous les onglets restants, un par un, avec <kbd>Ctrl + W</kbd>.'
        ]
    ],
    [
        'title' => 'Exercice 1.8 : Gérer les bureaux virtuels',
        'steps' => [
            'Créez un nouveau bureau virtuel avec <kbd>Win + Ctrl + D</kbd>.',
            'Répétez cette action jusqu\'à avoir **4 bureaux virtuels au total**.',
            'Naviguez entre les bureaux virtuels avec <kbd>Win + Ctrl + →</kbd> ou <kbd>←</kbd>.',
            'Supprimez les bureaux inutilisés avec <kbd>Win + Ctrl + F4</kbd>.'
        ]
    ],
    [
        'title' => 'Raccourcis pratiques pour les développeurs',
        'steps' => [
            '<kbd>F12</kbd> : Ouvrir les outils de développement dans un navigateur.',
            '<kbd>Ctrl + Shift + C</kbd> : Inspecter un élément dans un navigateur.'
        ]
    ],
    [
        'title' => 'Raccourcis pratiques et indispensables',
        'steps' => [
            '<kbd>F11</kbd> : Passez en mode plein écran dans un navigateur ou une application. Appuyez à nouveau sur <kbd>F11</kbd> pour revenir à l\'écran normal.',
            '<kbd>Ctrl + Scroll Souris</kbd> : Zoomer ou dézoomer sur une page.',
            '<kbd>Win + Shift + S</kbd> : Capturez une partie spécifique de votre écran. Dessinez une forme carrée ou rectangulaire à un endroit de la page. L\'image sera envoyée dans le presse-papiers ; testez-la en la collant quelque part avec <kbd>Win + V</kbd>.',
            '<kbd>F5</kbd> : Rafraîchir une page ou une fenêtre.',
            '<kbd>Ctrl + F5</kbd> : Rafraîchir une page en contournant le cache.'
        ]
    ]
];
?>

<!-- Écran d’introduction -->
<div class="fullscreen-slide" id="intro-slide">
    <div class="d-flex flex-column justify-content-center align-items-center h-100 p-4 text-center">
        <h1 class="text-center mb-5">Pratique sur le Bureau</h1>

        <div class="alert d-flex justify-content-center" style="margin: 2rem auto; text-align: center;">
            <aside class="text-center border rounded p-4 w-75" style="background-color: #cccccc; font-weight: bold; border-width: 1px;" onclick="document.getElementById('intro-slide-1').scrollIntoView({behavior: 'smooth'});">
                <strong class="text-primary">Information :</strong> Ici, il n'est pas nécessaire d'interagir avec un éditeur, car cela concerne la manipulation orientée navigation des onglets et des dossiers du bureau. Néamoins, faite le sérieusement !
            </aside>
        </div>

        <!-- Le bouton d'exercice -->
        <div class="d-flex align-items-center gap-3 mt-4">
            <button type="button" class="btn btn-primary btn-valider" data-scroll-target="intro-slide-1" onclick="document.getElementById('intro-slide-0').scrollIntoView({behavior: 'smooth'});">Commencer</button>
        </div>
    </div>
</div>



<?php
foreach ($exercises as $index => $exercise) {
    // Crée un identifiant unique pour chaque exercice (par exemple: intro-slide-0, intro-slide-1, etc.)
    $exerciseId = "intro-slide-" . $index;

    echo '<div class="fullscreen-slide" id="' . $exerciseId . '">';
    echo '<div class="d-flex flex-column justify-content-center align-items-center h-100 p-4">';
    echo '<div class="card shadow mb-4">';
    echo '<div class="card-body">';
    echo "<h4>{$exercise['title']}</h4>";
    echo '<ol class="mb-0">';

    foreach ($exercise['steps'] as $step) {
        echo "<li>$step</li>";
    }

    echo '</ol>';
    echo '</div>';
    echo '</div>';
    $nextExerciseId = "intro-slide-" . ($index + 1);
    if (isset($exercises[$index + 1])) {
        // Si un exercice suivant existe, afficher le bouton "Suivant"
        echo '<div class="my-4 text-center">';
        echo '<button type="button" class="btn btn-primary" onclick="document.getElementById(\'' . $nextExerciseId . '\').scrollIntoView({behavior: \'smooth\'});">';
        echo 'Suivant';
        echo '</button>';
        echo '</div>';
    }

    // Ajout du bouton qui redirige vers la page "vscode" après l'exercice
    if (!isset($exercises[$index + 1])) {
        // Ce bouton est affiché uniquement sur le dernier exercice
        echo '<div class="my-4 text-center">';
        echo '<button type="button" class="btn btn-primary" onclick="window.location.href=\'vscode\'">';
        echo 'Aller à la page suivante';
        echo '</button>';
        echo '</div>';
    }

    echo '</div>'; // fin d-flex
    echo '</div>'; // fin fullscreen-slide
}
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Scroll auto vers l'exercice mémorisé
        const last = localStorage.getItem('lastExercise');
        if (last) {
            const target = document.getElementById(last);
            if (target) {
                target.scrollIntoView({
                    behavior: 'instant'
                });
            }
        }

        // Enregistre la position quand on clique sur un bouton vers un slide
        document.querySelectorAll('button').forEach(button => {
            const onclick = button.getAttribute('onclick');
            const match = onclick && onclick.match(/document\.getElementById\('([^']+)'\)/);

            if (match && match[1]) {
                button.addEventListener('click', () => {
                    localStorage.setItem('lastExercise', match[1]);
                });
            }

            // Cas du bouton de fin : efface la progression
            if (onclick && onclick.includes("window.location.href='vscode'")) {
                button.addEventListener('click', () => {
                    localStorage.removeItem('lastExercise');
                });
            }
        });
    });
</script>

<script src="<?= ROOT ?>/Public/js/keyDisabled.js"></script>