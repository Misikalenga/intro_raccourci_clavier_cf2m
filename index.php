<?php
require_once 'Controllers/PublicController.php';


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
    case 'inscription':
        inscriptionPage();
        break;
    case 'intro':
        introPage();
        break;
    default:
        errorPage();
        break;
}
