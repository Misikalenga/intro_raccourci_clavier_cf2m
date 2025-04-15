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
        'titre' => 'Exercice 2.5',
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
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercices VSCode</title>
    <script src="https://cdn.jsdelivr.net/npm/monaco-editor/min/vs/loader.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .editor {
            height: 120px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .message {
            color: green;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Pratique sur Virtual Studio Code</h1>

        <?php foreach ($exercices as $id => $exo): ?>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4><?= $exo['titre'] ?></h4>
                    <ol class="mb-0">
                        <?php foreach ($exo['instructions'] as $instruction): ?>
                            <li><?= $instruction ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>

            <div class="mb-3 zone_edition">
                <div id="editor<?= $id ?>" class="editor"></div>
                <div class="d-flex align-items-center mt-2">
                    <button onclick="validateEditor(<?= $id ?>)" type="button" class="btn btn-primary me-2">Valider</button>
                    <p id="message<?= $id ?>" class="message mb-0"></p>
                </div>
            </div>

            <?php if ($id === array_key_last($exercices)): ?>
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
            <?php endif; ?>

            <hr style="height: 5px; background-color: black; margin: 3rem 0;">
        <?php endforeach; ?>


        <div class="my-4 text-center">

            <button type="button" class="btn btn-primary" onclick="window.location.href='navigation'">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='outro'">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </button>
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
    <script>
        let editors = {};
        require.config({
            paths: {
                'vs': 'https://cdn.jsdelivr.net/npm/monaco-editor@0.45.0/min/vs'
            }
        });

        const editorConfigs = {
            <?php foreach ($exercices as $id => $exo): ?> "editor<?= $id ?>": {
                    value: `<?= addslashes($exo['code']) ?>`,
                    language: "<?= $exo['langage'] ?>"
                },
            <?php endforeach; ?>
        };

        require(['vs/editor/editor.main'], function() {
            for (const [id, config] of Object.entries(editorConfigs)) {
                editors[id] = monaco.editor.create(document.getElementById(id), {
                    value: config.value,
                    language: config.language,
                    theme: 'vs-dark',
                    fontSize: 14
                });
            }

            window.validateEditor = function(id) {
                const editorId = "editor" + id;
                const content = editors[editorId].getValue();
                const message = document.getElementById("message" + id);
                const lines = content.trim().split(/\r?\n/).map(l => l.trim());

                let isValid = false;

                switch (id) {
                    case 1: // Exercice 1.9
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
                        // Vérifie que la première ligne a été commentée puis décommentée
                        const line1 = lines[0].trim(); // "let utilisateur = \"Jean\";"

                        // Vérifie les lignes commentées après avoir utilisé Alt + Click
                        const line2 = lines[1].trim(); // "// console.log(utilisateur);"
                        const line3 = lines[2].trim(); // "// const nom = \"x\";"

                        // Vérifie que les lignes sont dans l'ordre correct
                        isValid = (
                            line1 === 'let utilisateur = "Jean";' &&
                            line2 === '// console.log(utilisateur);' &&
                            line3 === '// const nom = "x";'
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
            }

        });
    </script>