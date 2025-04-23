<?php
session_start(); // Démarre la session
require_once 'Controllers/pagesController.php';
require_once 'Controllers/crudController.php';
require_once 'Models/CrudModel.php';

// showArray($_SESSION['user']);

define('ROOT', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));


if (empty($_GET['page'])) {
    $url[0] = "home";
} else {
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
}


switch ($url[0]) {
    case 'home':
        homePage();

        break;
    case 'connexionPage':

        connexionPage();
        break;
    case 'connexion':

        $data = getUser($pdo, $_POST['login']);

        if ($data && $data['user'] === $_POST['login'] && password_verify($_POST['password'], $data['password'])) {
            $_SESSION['user'] = $data['user'];
            $_SESSION['statue'] = "connecté";
            header('Location: home'); // Rediriger vers la page d'accueil après connexion
            exit();
        } else {
            $_SESSION['user'] = "lambda";
            $_SESSION['statue'] = "non connecté";
            $_SESSION['error_message'] = "Nom d'utilisateur ou mot de passe incorrect !";
            header('Location: connexionPage');
            exit();
        }

    case 'inscriptionPage':
        inscriptionPage();
        break;

    case 'inscription':
        $data = getUser($pdo, $_POST['user']);

        if ($data) {
            $_SESSION['error_message'] = "Ce nom d'utilisateur existe déjà.";
            header('Location: inscriptionPage'); // Redirection vers l'inscription si déjà existant
            exit();
        } else {
            $_SESSION['success_message'] = "Vous avez créé votre compte !";
            createCurrentUser($pdo, $_POST['user'], $_POST['password']); // Enregistre l'utilisateur
            header('Location: connexionPage'); // Redirige vers la page de connexion au lieu de l'accueil
            exit();
        }


    case 'intro':
        introPage($pdo);
        break;
    case 'training':
        pratiquePage();
        break;
    case 'navigation':
        navigationPage();
        break;
    case 'vscode':
        vsCodePage();
        break;
    case 'outro':
        outroPage();
        break;
    case 'destroy':
        require_once('Views/pages/deconnexion.php');
        connexionPage();
        break;
    default:
        errorPage();
        break;
}

$pdo = null;
