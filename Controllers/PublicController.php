<?php
require_once 'Controllers/Utilities.php';
require_once 'Models/ShortcutModel.php';
function homePage()
{
    $data_page = [
        'description' => 'Page d\'accueil',
        'title' => 'Accueil',
        'view' => 'Views/pages/homePage.php',
        'layout' => 'Views/commons/layout.php',
    ];

    renderPage($data_page);
}

function connexionPage()
{
    $data_page = [
        'description' => 'Page de connexion',
        'title' => 'Connexion',
        'view' => 'Views/pages/connexionPage.php',
        'layout' => 'Views/commons/layout.php',
    ];

    renderPage($data_page);
}

function inscriptionPage()
{
    $data_page = [
        'description' => 'Page de connexion',
        'title' => 'Connexion',
        'view' => 'Views/pages/registerPage.php',
        'layout' => 'Views/commons/layout.php',
    ];

    renderPage($data_page);
}
function introPage($pdo)
{
    $shortcuts = getWindowsShortcuts($pdo);
    $shortcutsVscode = getVscodeShortcuts($pdo);
    $data_page = [
        'description' => 'Page d\'introduction',
        'title' => 'Introduction',
        'view' => 'Views/pages/introPage.php',
        'layout' => 'Views/commons/layout.php',
        'shortcuts' => $shortcuts,
        'shortcutsVscode' => $shortcutsVscode,
    ];

    renderPage($data_page);
}
function errorPage()
{
    $data_page = [
        'description' => 'Page d\'erreur',
        'title' => '404',
        'view' => 'Views/pages/404.php',
        'layout' => 'Views/commons/layout.php',
    ];

    renderPage($data_page);
}
