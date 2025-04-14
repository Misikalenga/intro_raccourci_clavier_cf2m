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

    <!-- Exercice 1.9 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 1.9 : <!-- titre --> </h4>
            <ol class="mb-0">
                <li>Sélectionnez ou place ton curseur à la fin de la ligne contenant "Bonjour je suis un texte à dupliquer"</li>
                <li>Dupliquez-la en dessous avec <kbd>Shift + Alt + ↓</kbd></li>
                <li>Faites-le encore une fois.</li>
                <li>Vous devez avoir trois fois la même ligne.</li>
            </ol>
        </div>
    </div>
    <div class="mb-3 zone_edition">
        <div id="editor1" class="editor"></div>
        <div class="d-flex align-items-center mt-2">
            <button onclick="validateEditor(1, 'Bonjour, Je suis un texte à dupliquer')" type="button" class="btn btn-primary me-2">Valider</button>

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
                <li>Placez votre curseur sur la ligne <code>let x = 42;</code></li>
                <li>Déplacez-la au-dessus de <code>const nom = "Jean";</code> avec <kbd>Alt</kbd> + <kbd>↑</kbd></li>
                <li>Puis redescendez-la ensuite avec <kbd>Alt</kbd> + <kbd>↓</kbd></li>

            </ol>
        </div>
    </div>
    <div class="mb-3 zone_edition">
        <div id="editor2" class="editor"></div>
        <div class="d-flex align-items-center mt-2">
            <button onclick="validateEditor(2, 'Bonjour, Je suis un texte à dupliquer')" type="button" class="btn btn-primary me-2">Valider</button>

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
                <li>Placez le curseur sur n'importe quelle ligne.</li>
                <li>Ajoutez une ligne en dessous avec <kbd>Ctrl</kbd> + <kbd>Enter</kbd>, puis tapez // Ligne ajoutée.</li>
                <li>Ajoutez une ligne au-dessus avec <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>Enter</kbd>, puis tapez // Ligne au-dessus.</li>
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

    <!-- Exercice 3.0 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 3.0 : <!-- titre --> </h4>
            <ol class="mb-0">
                <li>Sélectionnez le mot compteur.</li>
                <li>Utilisez <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>L</kbd> pour sélectionner toutes les occurrences du mot dans le document.</li>
                <li>Remplacez-les toutes par total.</li>
            </ol>
        </div>
    </div>
    <div class="mb-3 zone_edition">
        <div id="editor4" class="editor"></div>
        <div class="d-flex align-items-center mt-2">
            <button onclick="validateEditor(4, 'total')" type="button" class="btn btn-primary me-2" data-editor="editor">Valider</button>
            <p id="message4" class="message mb-0"></p>
        </div>
        <div id="result-editor" class="fw-bold"></div>
    </div>
    <hr style="height: 5px; background-color: black; margin: 3rem 0;">

    <!-- Exercice 4.0 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 4.0 : <!-- titre --> </h4>
            <ol class="mb-0">
                <li>Sélectionnez les trois lignes.</li>
                <li>Commentez-les avec <kbd>Ctrl</kbd> + <kbd>/</kbd>.</li>
                <li>Puis décommentez-les de la même manière.</li>
            </ol>
        </div>
    </div>
    <div class="mb-3 zone_edition">
        <div id="editor5" class="editor"></div>
        <div class="d-flex align-items-center mt-2">
            <button onclick="validateEditor(5, 'comment')" type="button" class="btn btn-primary me-2" data-editor="editor">Valider</button>
            <p id="message5" class="message mb-0"></p>
        </div>
        <div id="result-editor" class="fw-bold"></div>
    </div>
    <hr style="height: 5px; background-color: black; margin: 3rem 0;">



    <!-- Exercice 5.0 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 5.0 : <!-- titre --> </h4>
            <ol class="mb-0">
                <li>Placez votre curseur au début de console.log("Hello");.</li>
                <li>Utilisez <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>→</kbd> pour sélectionner mot par mot jusqu’à la fin.</li>
                <li>Supprimez tout avec <kbd>Backspace</kbd>.</li>
            </ol>
        </div>
    </div>
    <div class="mb-3 zone_edition">
        <div id="editor6" class="editor"></div>
        <div class="d-flex align-items-center mt-2">
            <button onclick="validateEditor(6, '')" type="button" class="btn btn-primary me-2" data-editor="editor">Valider</button>
            <p id="message6" class="message mb-0"></p>
        </div>
        <div id="result-editor" class="fw-bold"></div>
    </div>






    <hr style="height: 5px; background-color: black; margin: 3rem 0;">



    <!-- Exercice 6.0 -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Exercice 6.0 : <!-- titre --> </h4>
            <ol class="mb-0">
                <li>Maintenez <kbd>Ctrl</kbd> et cliquez sur chaque mot "apple".</li>
                <li>Remplacez-les tous par "orange".</li>
            </ol>
        </div>
    </div>
    <div class="mb-3 zone_edition">
        <div id="editor7" class="editor"></div>
        <div class="d-flex align-items-center mt-2">
            <button onclick="validateEditor(7, 'orange')" type="button" class="btn btn-primary me-2" data-editor="editor">Valider</button>
            <p id="message7" class="message mb-0"></p>
        </div>
        <div id="result-editor" class="fw-bold"></div>
    </div>







    <div class="container mt-4 d-flex text-center justify-content-center gap-2">
        <button type="button" class="btn btn-primary" onclick="window.location.href='navigation'">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </button>

    </div>
</div>

<script>
    let editors = {}; // ← objet pour stocker les éditeurs

    require.config({
        paths: {
            'vs': 'https://cdn.jsdelivr.net/npm/monaco-editor@0.45.0/min/vs'
        }
    });

    require(['vs/editor/editor.main'], function () {
        function createEditor(editorId, initialValue, language, theme) {
            const editorInstance = monaco.editor.create(document.getElementById(editorId), {
                value: initialValue,
                language: language,
                theme: theme,
                fontSize: 14
            });
            editors[editorId] = editorInstance;
        }

        createEditor('editor1', 'Bonjour, Je suis un texte à dupliquer', 'php', 'vs-dark');
        createEditor('editor2', 'let x = 42;\nconst nom = "Jean";', 'javascript', 'vs-dark');
        createEditor('editor3', '<?php\n    // Placez votre code ici\n?>', 'php', 'vs-dark');
        createEditor('editor4', 'let compteur = 0;\ncompteur += 1;\nconsole.log(compteur);', 'javascript', 'vs-dark');
        createEditor('editor5', 'let a = 1;\nlet b = 2;\nlet c = 3;', 'javascript', 'vs-dark');
        createEditor('editor6', 'console.log("Hello");', 'javascript', 'vs-dark');
        createEditor('editor7', 'const fruit1 = "apple";\nconst fruit2 = "apple";', 'javascript', 'vs-dark');

        window.validateEditor = function (editorNumber, expectedKey) {
            const editorId = `editor${editorNumber}`;
            const editor = editors[editorId];

            if (!editor) {
                alert(`Éditeur ${editorId} introuvable`);
                return;
            }

            const userCode = editor.getValue();
            const lines = userCode.split(/\r?\n/).map(line => line.trim());
            const messageElement = document.getElementById(`message${editorNumber}`);

            let isValid = false;

            switch (editorNumber) {
                case 1:
                    isValid = lines.length === 3 && lines.every(line => line === 'Bonjour, Je suis un texte à dupliquer');
                    break;
                case 2:
                    isValid = lines[0] === 'let x = 42;' && lines[1] === 'const nom = "Jean";' ||
                              lines[0] === 'const nom = "Jean";' && lines[1] === 'let x = 42;';
                    break;
                case 3:
                    isValid = lines.includes('// Ligne ajoutée.') && lines.includes('// Ligne au-dessus.');
                    break;
                case 4:
                    isValid = userCode.includes('total') && !userCode.includes('compteur');
                    break;
                case 5:
                    isValid = lines.every(line => line.startsWith('//') || line === '');
                    break;
                case 6:
                    isValid = userCode.trim() === '';
                    break;
                case 7:
                    isValid = userCode.includes('orange') && !userCode.includes('apple');
                    break;
                default:
                    isValid = false;
            }

            if (isValid) {
                messageElement.innerText = `Bonne réponse ✅`;
                messageElement.style.color = 'green';
            } else {
                messageElement.innerText = `Valeur incorrecte ❌`;
                messageElement.style.color = 'red';
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>