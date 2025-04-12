<script src="https://cdn.jsdelivr.net/npm/monaco-editor/min/vs/loader.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<style>
    .editor {
        /* width: 1000px; */
        height: 120px;
        /* Hauteur réduite */
        border: 1px solid #ccc;
        margin-bottom: 20px;
    }

    .message {
        color: green;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>
<div class="container py-5">

    <h1 class="text-center mb-5">Pratique sur Virtual Studio Code</h1>
    <div class="alert d-flex justify-content-center" style="margin: 2rem auto; text-align: center;">

        <aside class="text-center border rounded p-4 w-75" style="background-color: #cccccc; font-weight: bold; border-width: 1px; ">
            <strong class="text-primary">Information :</strong> Les raccourcis présentés ici sont des raccourcis de base pour Visual Studio Code. Ils vous permettront de naviguer plus facilement dans l'éditeur et d'améliorer votre productivité. Les raccourcis Windows que vous avez appris précédemment sont également applicables ici. Notez que certains raccourcis sont spécifiques à Visual Studio Code et ne fonctionnent pas sur Windows.
        </aside>
    </div>

    <!-- Exercice 2.0 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 1.9 : <!-- titre --> </h4>
            <ol class="mb-0">
                <!-- contenu ici -->
            </ol>
        </div>
    </div>
    <div class="mb-3 zone_edition">
        <div id="editor1" class="editor "></div>
        <div class="d-flex align-items-center mt-2">
            <button onclick="validateEditor(1, 'return')" type="button" class="btn btn-primary me-2" data-editor="editor">Valider</button>
            <p id="message1" class="message mb-0"></p>
        </div>
        <div id="result-editor" class="fw-bold"></div>
    </div>


    <hr style="height: 5px; background-color: black; margin: 3rem 0;">



    <!-- Exercice 2.0 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 1.9 : <!-- titre --> </h4>
            <ol class="mb-0">
                <!-- contenu ici -->
            </ol>
        </div>
    </div>
    <div class="mb-3 zone_edition">
        <div id="editor2" class="editor"></div>
        <div class="d-flex align-items-center mt-2">
            <button onclick="validateEditor(2, 'return')" type="button" class="btn btn-primary me-2" data-editor="editor">Valider</button>
            <p id="message2" class="message mb-0"></p>
        </div>
        <div id="result-editor" class="fw-bold"></div>
    </div>


    <hr style="height: 5px; background-color: black; margin: 3rem 0;">




    <!-- Exercice 2.0 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 1.9 : <!-- titre --> </h4>
            <ol class="mb-0">
                <!-- contenu ici -->
            </ol>
        </div>
    </div>
    <div class="mb-3 zone_edition">
        <div id="editor3" class="editor"></div>
        <div class="d-flex align-items-center mt-2">
            <button onclick="validateEditor(3, 'return')" type="button" class="btn btn-primary me-2" data-editor="editor">Valider</button>
            <p id="message3" class="message mb-0"></p>
        </div>
        <div id="result-editor" class="fw-bold"></div>
    </div>


    <hr style="height: 5px; background-color: black; margin: 3rem 0;">
    <div class="container mt-4 d-flex text-center justify-content-center gap-2">
        <button type="button" class="btn btn-primary" onclick="window.location.href='navigation'">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </button>

    </div>
</div>

<script>
    // Charger Monaco Editor
    require.config({
    paths: {
            'vs': 'https://cdn.jsdelivr.net/npm/monaco-editor/min/vs'
        }
    }, function() {});
    require(['vs/editor/editor.main'], function() {
        // Fonction pour créer un éditeur
        function createEditor(editorId, value, language, theme) {
            monaco.editor.create(document.getElementById(editorId), {
                value: value,
                language: language,
                theme: theme
            });
        }

        // Créer les cinq éditeurs
        createEditor('editor1', '<?php // Écrivez votre code ici...\n
                                    ?>', 'php', 'vs-dark');
        createEditor('editor2', '<?php // Écrivez votre code ici...\n
                                    ?>', 'php', 'vs-dark');
        createEditor('editor3', '<?php // Écrivez votre code ici...\n
                                    ?>', 'php', 'vs-dark');


        // Fonction pour valider l'éditeur
        window.validateEditor = function(editorNumber, expectedText) {
            const editor = monaco.editor.getModels()[editorNumber - 1];
            const userCode = editor.getValue();

            if (userCode.includes(expectedText)) {
                const messageElement = document.getElementById(`message${editorNumber}`);
                messageElement.innerText = `Bonne réponse ✅`;
                messageElement.style.color = 'green'; // Couleur verte
            } else {
                const messageElement = document.getElementById(`message${editorNumber}`);
                messageElement.innerText = `Valeur incorrecte ❌`;
                messageElement.style.color = 'red'; // Couleur rouge
            }

        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>