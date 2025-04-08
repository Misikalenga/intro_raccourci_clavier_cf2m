<?php
require_once 'Controllers/pagesController.php';
// require_once 'Controllers/CrudController.php';
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
        break;
    case 'connexion':
        connexionPage();
        break;
    case 'inscriptionPage':
        inscriptionPage();
        break;
    case 'inscription':
        $user = htmlspecialchars($_POST['user']);
        $password = htmlspecialchars($_POST['password']);
        if (
            empty($user) ||
            empty($password)
        ) {
            throw new Exception("Tous les champs doivent etre remplis !");
        }
        createCurrentUser($user, $password);
        break;

    case 'intro':
        introPage();
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
    default:
        errorPage();
        break;
}
