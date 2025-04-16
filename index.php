<?php
session_start(); // Démarre la session

require_once 'Controllers/pagesController.php';
require_once 'Controllers/CrudController.php';
require_once 'Models/CrudModel.php';


define('ROOT', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));


if (empty($_GET['page'])) {
    $url[0] = "home";
} else {
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
}



switch ($url[0]) {
    case 'home':
        homePage();
        showArray($_SESSION);

        break;
    case 'connexionPage':
        connexionPage();
        break;
    case 'connexion':
        $data = getUser($pdo, $_POST['login']);

        if ($data && $data['user'] === $_POST['login'] && password_verify($_POST['password'], $data['password'])) {
            $_SESSION['statue'] = "connecté";
            echo "ok";
            header('Location:home');
            exit();
        } else {
            $_SESSION['statue'] = "non connecté";
            header('Location:connexionPage');
        }
        break;
    case 'inscriptionPage':
        inscriptionPage();
        break;
    case 'inscription':
        createCurrentUser($pdo, $_POST['user'], $_POST['password']);
        break;
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
