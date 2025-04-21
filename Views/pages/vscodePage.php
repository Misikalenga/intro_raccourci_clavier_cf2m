<?php

$exercices = [
    1 => [
        'titre' => 'Exercice 1.9',
        'instructions' => [
            'Sélectionnez ou place ton curseur à la fin de la ligne contenant <code>Bonjour je suis un texte à dupliquer</code>',
            'Dupliquez-la en dessous avec <kbd>Shift + Alt + ↓</kbd>',
            'Faites-le encore deux fois.',
            'Vous devez avoir trois fois la même ligne.'
        ],
        'code' => 'Bonjour, Je suis un texte à dupliquer',
        'langage' => 'php'
    ],
    2 => [
        'titre' => 'Exercice 2.0',
        'instructions' => [
            'Voici 5 lignes de code.',
            'Utilisez <kbd>Alt</kbd> + <kbd>↑</kbd> ou <kbd>Alt</kbd> + <kbd>↓</kbd> pour déplacer les lignes.',
            'Réorganisez-les pour obtenir exactement :',
            '<code>let x = 42;</code><br>
            <code>let x = 42;</code><br>
            <code>const nom = "Jean";</code><br>
            <code>const nom = "Jean";</code><br>
            <code>let x = 42;</code>'
        ],
        'code' => <<<EOD
const nom = "Jean";
let x = 42;
let x = 42;
let x = 42;
const nom = "Jean";
EOD,
        'langage' => 'javascript'
    ],
    3 => [
        'titre' => 'Exercice 2.1',
        'instructions' => [
            'Placez votre curseur sur <code>x</code> dans <code>let x = 42;</code>',
            'Utilisez <kbd>Ctrl</kbd> + <kbd>D</kbd> pour sélectionner les autres occurences de <code>x</code> une par une.',
            'Remplacez toutes les occurences de <code>x</code> par <code>age</code>.',
            'Vous pouvez également utilisez <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>L</kbd> pour selectionnez directement toute les occurences d\'un seul coup !',
            'Faite le et changez <code>age</code> par <code>facile</code>'
        ],
        'code' => <<<EOD
    let x = 42;
    console.log(x);
    const nom = "x";
    alert('Mon grand x')
    EOD,
        'langage' => 'javascript'
    ],
    4 => [
        'titre' => 'Exercice 2.2',
        'instructions' => [
            'Double-cliquez sur le mot <code>Jean</code> dans la première ligne.',
            'Utilisez <kbd>Ctrl</kbd> + <kbd>X</kbd> pour le couper.',
            'Appuyez ensuite sur <kbd>Ctrl</kbd> + <kbd>Entrée</kbd> pour insérer une nouvelle ligne.',
            'Collez <code>Jean</code> dans la nouvelle ligne vide avec <kbd>Ctrl</kbd> + <kbd>V</kbd>.',
            'Voyez-vous, il n\'est pas nécessaire d\'aller à la fin d\'une ligne pour passer à la ligne sur VsCode !'
        ],
        'code' => 'const nom = "Jean";',
        'langage' => 'javascript'
    ],

    5 => [
        'titre' => 'Exercice 2.3',
        'instructions' => [
            'Placez votre curseur au début de la ligne <code>let utilisateur = "Jean";</code>.',
            'Utilisez <kbd>Ctrl</kbd> + <kbd>Slash</kbd> (<kbd>Ctrl</kbd> + <kbd>/</kbd>) pour commenter cette ligne.',
            'Ensuite, décommentez-la en utilisant à nouveau <kbd>Ctrl</kbd> + <kbd>/</kbd>.',
            'Maintenant, utilisez <kbd>Alt</kbd> + <kbd>Click</kbd> pour sélectionner les lignes suivantes : <code>console.log(utilisateur);</code> et <code>const nom = "x";</code>.',
            'Enfin, commentez ces deux lignes sélectionnées en une seule fois avec <kbd>Ctrl</kbd> + <kbd>/</kbd>.'
        ],
        'code' => "let utilisateur = \"Jean\";\nconsole.log(utilisateur);\nconst nom = \"x\";",
        'langage' => 'javascript'
    ],

    6 => [
        'titre' => 'Exercice 2.4',
        'instructions' => [
            'Placez votre curseur au début de la ligne contenant <code>let utilisateur = "Jean";</code> et commentez la.',
            'Utilisez <kbd>Ctrl</kbd> + <kbd>D</kbd> pour sélectionner plusieurs occurences du mot <code>utilisateur</code> et remplacez-le par <code>client</code>',
            'Utilisez <kbd>Shift</kbd> + <kbd>Alt</kbd> + <kbd>↓</kbd> pour dupliquer la ligne contenant <code>let x = 42;</code>',
            'Maintenant, utilisez <kbd>Alt</kbd> + <kbd>Click</kbd> pour sélectionner les lignes 3 & 4, puis commentez-les ensemble avec <kbd>Ctrl</kbd> + <kbd>/</kbd>',
            'Allez à la fin de la ligne 6 et fait un <kbd>Ctrl</kbd> + <kbd>X</kbd> pour coupez la ligne',
            'Décommentez la première ligne et fait un <kbd>Ctrl</kbd> + <kbd>Enter</kbd> pour passez à la ligne et insérez la phrase <code>C\'est bon j\'ai fini</code>',
            'Le record actuel est de <kbd>00:39:101</kbd> Bonne chance !'
        ],
        'code' => <<<EOD
let utilisateur = "Jean";
console.log(utilisateur);
const nom = "x";
let x = 42;
alert('Mon grand x');
EOD,
        'langage' => 'javascript'
    ]

];

?>

<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100vh;
        overflow-y: hidden;
        scroll-snap-type: y mandatory;

    }
</style>
<!-- Écran d’introduction (titre + disclaimer) -->
<div class="fullscreen-slide" id="intro-slide">
    <div class="d-flex flex-column justify-content-center align-items-center p-4 text-center">
        <h1 class="mb-4">Pratique sur Virtual Studio Code</h1>
        <aside class="border rounded p-5 w-75" style="background-color: #cccccc; font-weight: bold;">
            <strong>⚠️ Attention :</strong> La triche ne sert à rien ! Prenez le temps de suivre les étapes avec sérieux.
            Les raccourcis clavier que vous apprendrez ici sont essentiels dans le développement web et vous feront gagner en
            efficacité.
            Jouez le jeu, car maîtriser ces outils est un véritable atout pour travailler rapidement et intelligemment.
        </aside>
        <div class="d-flex align-items-center gap-3 mt-4">
            <button type="button" class="btn btn-primary btn-valider" id="startButton">Commencer l'exercice 1</button>
        </div>
    </div>
</div>

<?php foreach ($exercices as $id => $exo): ?>

    <div class="fullscreen-slide" id="exercise<?= $id ?>">
        <div class="card shadow p-4 mb-5">
            <h4 class="text-center"><?= $exo['titre'] ?></h4>
            <div class="card-body">
                <div class="card-body shadow border border-dark rounded">
                    <ol class="mb-0">
                        <?php foreach ($exo['instructions'] as $instruction): ?>
                            <li><?= $instruction ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>

                <div class="zone_edition mt-4">
                    <h5>Zone d'édition</h5>
                    <div id="editor<?= $id ?>" class="editor"></div>
                    <div class="d-flex align-items-center mt-2">
                        <button onclick="validateEditor(<?= $id ?>)" type="button" class="btn btn-primary me-2">Valider</button>
                        <p id="message<?= $id ?>" class="message mb-0"></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Code PHP pour la vérification du dernier exercice -->
        <div class="d-flex justify-content-center gap-3 mt-5">

            <?php
            // Vérifier si c'est l'exercice 6
            if ($id == 6) {
                echo '<button type="button" class="btn btn-secondary btn-valider text-center" id="nextButton' . $id . '" disabled onclick="window.location.href=\'outro\'">Terminer l\'exercice</button>';
            } else {
                echo '<button type="button" class="btn btn-secondary btn-valider text-center" id="nextButton' . $id . '" data-scroll-target="#exercise' . ($id + 1) . '" disabled onclick="scrollToNextExercise(' . ($id + 1) . ')">Commencer l\'exercice ' . ($id + 1) . '</button>';
            }
            ?>

        </div>

    </div>

<?php endforeach; ?>

<!-- Chrono -->
<div class="chrono shadow border border-1 border-dark d-flex align-items-center justify-content-center gap-2 position-fixed top-0 start-50 translate-middle-x p-2 w-auto w-sm-25 w-md-20 w-lg-15">
    <p id="time" class="chrono-time mb-0">00:00:000</p>
    <button id="startPause" class="btn btn-primary p-2 chrono-btn" onclick="startPauseChrono()">
        <i class="fas fa-play"></i>
    </button>
    <button id="reset" class="btn btn-danger p-2 chrono-btn" onclick="resetChrono()">
        <i class="fas fa-sync"></i>
    </button>
</div>


<!-- Charger loader.js d'abord -->
<script src="https://cdn.jsdelivr.net/npm/monaco-editor/min/vs/loader.js"></script>

<script>
    let editors = {};
    let editorStates = {};

    const editorConfigs = {
        <?php foreach ($exercices as $id => $exo): ?> "editor<?= $id ?>": {
                value: `<?= addslashes($exo['code']) ?>`,
                language: "<?= $exo['langage'] ?>"
            }
            <?= ($id !== array_key_last($exercices) ? ',' : '') ?>
        <?php endforeach; ?>
    }

    document.addEventListener('DOMContentLoaded', function() {
        const startButton = document.getElementById('startButton');

        // Scroll vers exercice 1
        startButton.addEventListener('click', function() {
            const exercise1 = document.getElementById('exercise1');
            if (exercise1) {
                exercise1.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });

        // Charger Monaco après que loader.js est prêt
        require.config({
            paths: {
                'vs': 'https://cdn.jsdelivr.net/npm/monaco-editor@0.45.0/min/vs'
            }
        });

        require(['vs/editor/editor.main'], function() {
            // Initialiser les éditeurs
            for (const [id, config] of Object.entries(editorConfigs)) {
                editors[id] = monaco.editor.create(document.getElementById(id), {
                    value: config.value,
                    language: config.language,
                    theme: 'vs-dark',
                    fontSize: 14
                });

                editorStates[id] = {
                    isValid: false,
                    originalContent: editors[id].getValue()
                };

                editors[id].onDidChangeModelContent(function() {
                    if (editorStates[id].isValid) {
                        editorStates[id].isValid = false;
                        document.getElementById("message" + id).textContent = '';
                        resetNextButton(id);
                    }
                });
            }

            // Fonction globale de validation
            window.validateEditor = function(id) {
                const editorId = "editor" + id;
                const content = editors[editorId].getValue();
                const message = document.getElementById("message" + id);
                const lines = content.trim().split(/\r?\n/).map(l => l.trim());

                let isValid = false;

                switch (id) {
                    case 1:
                        isValid = lines.length === 4 && lines.every(l => l === 'Bonjour, Je suis un texte à dupliquer');
                        break;
                    case 2:
                        isValid = (
                            lines.length === 5 &&
                            lines[0] === 'let x = 42;' &&
                            lines[1] === 'let x = 42;' &&
                            lines[2] === 'const nom = "Jean";' &&
                            lines[3] === 'const nom = "Jean";' &&
                            lines[4] === 'let x = 42;'
                        );
                        break;
                    case 3:
                        isValid = (
                            lines.length === 4 &&
                            lines[0] === 'let facile = 42;' &&
                            lines[1] === 'console.log(facile);' &&
                            lines[2] === 'const nom = "facile";' &&
                            lines[3] === "alert('Mon grand facile')"
                        );
                        break;
                    case 4:
                        isValid = (
                            lines.length === 2 &&
                            lines[0] === 'const nom = "";' &&
                            lines[1] === 'Jean'
                        );
                        break;
                    case 5:
                        isValid = (
                            lines[0] === 'let utilisateur = "Jean";' &&
                            lines[1] === '// console.log(utilisateur);' &&
                            lines[2] === '// const nom = "x";'
                        );
                        break;
                    case 6:
                        isValid = lines.join('\n') === [
                            'let client = "Jean";',
                            "C'est bon j'ai fini",
                            'console.log(client);',
                            '// const nom = "x";',
                            '// let x = 42;',
                            'let x = 42;'
                        ].join('\n');
                        break;
                    default:
                        alert("Validation non définie pour l'exercice " + id);
                        return;
                }

                message.textContent = isValid ? 'Bonne réponse ✅' : 'Valeur incorrecte ❌';
                message.style.color = isValid ? 'green' : 'red';

                const nextButton = document.getElementById("nextButton" + id);
                if (isValid) {
                    nextButton.disabled = false;
                    nextButton.classList.remove("btn-secondary");
                    nextButton.classList.add("btn-success");
                } else {
                    nextButton.disabled = true;
                    nextButton.classList.remove("btn-success");
                    nextButton.classList.add("btn-secondary");
                }
            };

            // Scroll vers l'exercice suivant
            window.scrollToNextExercise = function(exerciseId) {
                const nextSlide = document.getElementById('exercise' + exerciseId);
                if (nextSlide) {
                    nextSlide.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            };

            // Fonction de reset des boutons (à ajouter si elle existe pas)
            window.resetNextButton = function(id) {
                const btn = document.getElementById("nextButton" + id);
                if (btn) {
                    btn.disabled = true;
                    btn.classList.remove("btn-success");
                    btn.classList.add("btn-secondary");
                }
            };
        });
    });
</script>

<script src="<?= ROOT ?>/Public/js/chrono.js"></script>
<script src="<?= ROOT ?>/Public/js/keyDisabled.js"></script>

<?php
