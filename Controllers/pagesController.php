<?php
require_once 'Models/CrudModel.php';
require_once 'Utilities.php';
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


function introPage($pdo)
{
    $shortcutWindows = getShortcutWindowsDB($pdo);
    $shortcutVscode = getShortcutVscodeDB($pdo);
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
        'view' => 'Views/pages/vscodePage.php',
        'layout' => 'Views/commons/layout.php',
    ];

    renderPage($data_page);
}
function outroPage(){
    $data_page = [
        'description' => 'Page de fin',
        'title' => 'Outro',
        'view' => 'Views/pages/outroPage.php',
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

function AdminDashboardPage($pdo)
{
    $comments = getComments($pdo);
    $data_page = [
        'description' => 'Page dashboard',
        'title' => 'Dashboard',
        'view' => 'Views/pages/adminDashboardPage.php',
        'layout' => 'Views/commons/layout.php',
        'comments' => $comments,
    ];

    renderPage($data_page);
}
