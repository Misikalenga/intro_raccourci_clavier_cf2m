<?php
require_once 'Controllers/Utilities.php';
require_once 'Models/CrudModel.php';
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
        'description' => 'Page d\'inscription',
        'title' => 'Inscription',
        'view' => 'Views/pages/registerPage.php',
        'layout' => 'Views/commons/layout.php',
    ];

    // Rendre la page avec les données
    renderPage($data_page);
}


function introPage()
{
    $shortcutWindows = getShortcutWindowsDB();
    $shortcutVscode = getShortcutVscodeDB();
    $data_page = [
        'description' => 'Page d\'introduction',
        'title' => 'Introduction',
        'view' => 'Views/pages/introPage.php',
        'layout' => 'Views/commons/layout.php',
        'shortcutWindows' => $shortcutWindows,
        'shortcutVscode' => $shortcutVscode,

    ];

    renderPage($data_page);
}
function pratiquePage()
{
    $data_page = [
        'description' => 'Page de pratique',
        'title' => 'Pratique',
        'view' => 'Views/pages/pratiquePage.php',
        'layout' => 'Views/commons/layout.php',
    ];

    renderPage($data_page);
}
function navigationPage()
{
    $data_page = [
        'description' => 'Page de pratique',
        'title' => 'Pratique',
        'view' => 'Views/pages/navigationPage.php',
        'layout' => 'Views/commons/layout.php',
    ];

    renderPage($data_page);
}
function vsCodePage(){
    $data_page = [
        'description' => 'Page de pratique',
        'title' => 'Pratique',
        'view' => 'Views/pages/vsCodePage.php',
        'layout' => 'Views/commons/layout.php',
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
