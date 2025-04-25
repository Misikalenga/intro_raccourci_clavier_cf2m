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
    html,
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        overflow-y: hidden;
        scroll-snap-type: y mandatory;
    }
</style>

<!-- Écran d’introduction -->
<div class="fullscreen-slide" id="intro-slide">
    <div class="d-flex flex-column justify-content-center align-items-center h-100 p-4 text-center">
        <h1 class="mb-4">Pratique sur Virtual Studio Code</h1>
        <aside class="border rounded p-4 w-75 mb-3" style="background-color:#cccccc; font-weight:bold;">
            ⚠️ La triche ne sert à rien – suivez les étapes sérieusement !
        </aside>
        <div class="d-flex align-items-center gap-3 mt-4">
            <button type="button" id="startButton" class="btn btn-primary btn-valider" data-scroll-target="#exercise1">
                Commencer l'exercice 1
            </button>
        </div>
    </div>
</div>

<!-- Slides Exercices -->
<?php foreach ($exercices as $id => $exo):
    $slideId = "exercise$id";
?>
    <div class="fullscreen-slide" id="<?= $slideId ?>">
        <div class="card shadow p-4 mb-5">
            <h4 class="text-center"><?= $exo['titre'] ?></h4>
            <div class="card-body">
                <div class="card-body shadow border border-dark rounded mb-3">
                    <ol>
                        <?php foreach ($exo['instructions'] as $inst): ?>
                            <li><?= $inst ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>

                <div class="zone_edition mt-3">
                    <h5 class="fw-bold">Zone de code</h5>
                    <!-- Monaco editor container -->
                    <div id="editor<?= $id ?>" class="editor border rounded mb-3" style="height:200px;"></div>
                    <div class="d-flex align-items-center gap-3">
                        <button
                            type="button"
                            class="btn btn-primary btn-valider"
                            onclick="validateEditor(<?= $id ?>)">
                            Valider
                        </button>
                        <span id="message<?= $id ?>" class="fw-bold"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center gap-3 mt-3">
            <?php if ($id < count($exercices)): ?>
                <button
                    id="nextButton<?= $id ?>"
                    class="btn btn-secondary btn-next"
                    disabled
                    data-scroll-target="#exercise<?= $id + 1 ?>"
                    onclick="scrollToNextExercise(<?= $id + 1 ?>)">
                    Commencer l'exercice <?= $id + 1 ?>
                </button>
            <?php else: ?>
                <button
                    id="nextButton<?= $id ?>"
                    class="btn btn-secondary btn-next"
                    disabled
                    onclick="finishExercises()">
                    Terminer l'exercice
                </button>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; ?>

<!-- Chrono (identique à ta page zone de texte) -->
<!-- <div class="chrono shadow border border-1 border-dark d-flex align-items-center justify-content-center gap-2 position-fixed top-0 start-50 translate-middle-x p-2">
    <p id="time" class="chrono-time mb-0">00:00:000</p>
    <button id="startPause" class="btn btn-primary p-2 chrono-btn" onclick="startPauseChrono()">
        <i class="fas fa-play"></i>
    </button>
    <button id="reset" class="btn btn-danger p-2 chrono-btn" onclick="resetChrono()">
        <i class="fas fa-sync"></i>
    </button>
</div> -->

<!-- Monaco & logique inchangée, juste intégration des data-scroll-target -->
<script src="https://cdn.jsdelivr.net/npm/monaco-editor/min/vs/loader.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Restauration / start / suivant identique à la page zone de texte
        const last = localStorage.getItem('lastExercise');
        if (last) document.querySelector(last)?.scrollIntoView({
            behavior: 'auto'
        });

        document.querySelectorAll('[data-scroll-target]').forEach(btn => {
            btn.addEventListener('click', () => {
                const sel = btn.getAttribute('data-scroll-target');
                localStorage.setItem('lastExercise', sel);
                document.querySelector(sel).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        window.finishExercises = () => {
            localStorage.removeItem('lastExercise');
            window.location.href = 'outro';
        };

        // Monaco init… (inchangé)
        require.config({
            paths: {
                vs: 'https://cdn.jsdelivr.net/npm/monaco-editor@0.45.0/min/vs'
            }
        });
        require(['vs/editor/editor.main'], () => {
            window.editors = {};
            const cfg = <?= json_encode($exercices) ?>;
            for (let id in cfg) {
                const dom = document.getElementById('editor' + id);
                window.editors[id] = monaco.editor.create(dom, {
                    value: cfg[id].code,
                    language: cfg[id].langage,
                    theme: 'vs-dark',
                    fontSize: 14
                });
                window.editors[id].onDidChangeModelContent(() => {
                    document.getElementById('nextButton' + id).disabled = true;
                    document.getElementById('message' + id).textContent = '';
                });
            }
        });
    });

    // Validation inchangée
    window.validateEditor = id => {
        const lines = window.editors[id].getValue().trim().split(/\r?\n/).map(l => l.trim());
        let ok = false;

        switch (+id) {
            case 1:
                ok = lines.length === 4 && lines.every(l => 'Bonjour, Je suis un texte à dupliquer' === l);
                break;
            case 2:
                ok = lines.length === 5 &&
                    lines[0] === 'let x = 42;' && lines[1] === 'let x = 42;' &&
                    lines[2] === 'const nom = "Jean";' && lines[3] === 'const nom = "Jean";' &&
                    lines[4] === 'let x = 42;';
                break;
            case 3:
                ok = lines.length === 4 &&
                    lines[0] === 'let facile = 42;' && lines[1] === 'console.log(facile);' &&
                    lines[2] === 'const nom = "facile";' && lines[3] === "alert('Mon grand facile')";
                break;
            case 4:
                ok = lines.length === 2 && lines[0] === 'const nom = "";' && lines[1] === 'Jean';
                break;
            case 5:
                ok = lines[0] === 'let utilisateur = "Jean";' &&
                    lines[1] === '// console.log(utilisateur);' && lines[2] === '// const nom = "x";';
                break;
            case 6:
                ok = lines.join('\n') === [
                    'let client = "Jean";',
                    "C'est bon j'ai fini",
                    'console.log(client);',
                    '// const nom = "x";',
                    '// let x = 42;',
                    'let x = 42;'
                ].join('\n');
                break;

        }
        const nextBtn = document.getElementById('nextButton' + id);
        if (ok) {
            nextBtn.disabled = false;
            nextBtn.classList.remove('btn-secondary');
            nextBtn.classList.add('btn-success');
        } else {
            nextBtn.disabled = true;
            nextBtn.classList.remove('btn-success');
            nextBtn.classList.add('btn-secondary');
        }

        const msg = document.getElementById('message' + id);
        msg.textContent = ok ? 'Bonne réponse ✅' : 'Valeur incorrecte ❌';
        msg.style.color = ok ? 'green' : 'red';
        if (ok) document.getElementById('nextButton' + id).disabled = false;
    };
</script>

<script src="<?= ROOT ?>/Public/js/chrono.js"></script>
<script src="<?= ROOT ?>/Public/js/keyDisabled.js"></script>