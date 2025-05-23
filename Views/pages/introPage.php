<div class="container mt-5 d-flex flex-column align-items-center">
    <h1 class="text-center mb-5">Introduction</h1>
    <p class="text-center">
        Les raccourcis clavier sont des outils essentiels pour tout développeur,
        car ils permettent de gagner un temps précieux en réduisant la dépendance
        à la souris et en optimisant le flux de travail. En tant que codeur,
        maîtriser ces raccourcis permet non seulement d'augmenter la productivité,
        mais aussi d'éviter les distractions et d'améliorer la concentration.
        Que ce soit pour naviguer rapidement entre les fichiers, effectuer des
        actions comme couper, copier, coller, ou gérer les fenêtres et les bureaux
        virtuels, les raccourcis clavier vous permettent d'être plus efficaces et de
        vous concentrer sur l'essentiel <span class="text-danger">CODER</span>
    </p>
    <p class="text-center">
        En intégrant ces raccourcis dans votre quotidien, vous pourrez améliorer
        votre rythme de travail, tout en simplifiant la navigation dans vos outils
        de développement et vos applications. Plus vous les utiliserez, plus ils
        deviendront une seconde nature et vous permettront de mieux gérer vos
        tâches et projets.
    </p>
    <div class="alert">
        <div class="alert d-flex justify-content-center" style="margin: 1rem auto; text-align: center;">

            <aside class="text-center border rounded p-4 w-75" style="background-color: #cccccc; font-weight: bold; border-width: 1px; ">
                <strong class="text-danger">Avertissement :</strong> Cette liste de raccourcis clavier est propre à mon usage personnel. Elle ne représente
                qu'une petite partie des raccourcis disponibles dans le système Windows et l'IDE VS Code.<br> Il existe des centaines d'autres raccourcis
                clavier qui n'ont pas été ajoutés ici, car ils ne sont pas nécessaires dans mon flux de travail quotidien.<br> Si vous
                souhaitez explorer la totalité des raccourcis clavier de Windows, vous pouvez consulter les sites officiels :
                <a href="https://fr.windows-office.net/?p=27067" target="_blank" class="link-primary text-decoration-none">Raccourcis clavier Windows</a>
                & <a href="https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf" target="_blank" class="link-primary text-decoration-none">Raccourcis clavier Virtual Studio Code</a>.
            </aside>
        </div>
    </div>
    <h2 class="text-center">Table des Raccourcis Clavier sur Windows</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th class="text-center">ID</th>
                <th>Raccourci clavier</th>
                <th>Utilité</th>
            </tr>
        </thead>
        <tbody>
            <!-- Raccourcis Windows -->
            <?php foreach ($shortcutWindows as $index => $shortcut): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($shortcut['shortcut']); ?></td>
                    <td><?= htmlspecialchars($shortcut['description']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Titre séparateur -->
    <h2 class="text-center mt-4">Table des Raccourcis Clavier sur VS Code</h2>

    <!-- Table pour raccourcis VS Code -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th class="text-center">ID</th>
                <th>Raccourci clavier</th>
                <th>Utilité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shortcutVscode as $index => $shortcut): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($shortcut['shortcut']); ?></td>
                    <td><?= htmlspecialchars($shortcut['description']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <div class="my-5 text-center">
        <p>
            Bon ! Assez de théorie... place à la pratique. C'est en marchant plusieurs fois sur un chemin qu'il finit par se dessiner !
        </p>
        <button type="button" class="btn btn-primary">
            <a class="text-white text-decoration-none" href="training">
                Je pratique <span class="ms-2">&rarr;</span>
            </a>
        </button>

    </div>
</div>