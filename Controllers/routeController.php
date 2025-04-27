<?php

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

        // Récupérer les données utilisateur
        $data = getUser($pdo, $_POST['login']);

        // Vérifiez si l'utilisateur existe et si le mot de passe est correct
        if ($data && $data['user'] === $_POST['login'] && password_verify($_POST['password'], $data['password'])) {
            // Initialiser les variables de session
            $_SESSION['user'] = $data['user'];
            $_SESSION['role'] = $data['role'];
            $_SESSION['statue'] = "connecté";

            // Rediriger en fonction du role
            if ($data['role'] === 'admin') {
                header('Location: home'); // Redirection pour les administrateurs
            } else {
                header('Location: home'); // Redirection pour les utilisateurs simples
            }
            exit();
        } else {
            // En cas d'échec de connexion
            $_SESSION['user'] = "lambda";
            $_SESSION['statue'] = "non connecté";
            $_SESSION['error_message'] = "Nom d'utilisateur ou mot de passe incorrect !";
            header('Location: connexionPage'); // Redirection vers la page de connexion
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
    case 'submitComment':
        $data = setComment($pdo, $_POST['username'], $_POST['comment']);

        if ($data === true) {
            $_SESSION['success_message'] = "Votre message a été envoyé avec succès !";
            header('Location: home');
            exit();
        } else {
            $_SESSION['error_message'] = $data; // Récupère 
            header('Location: outro');
        }
        break;
    case 'adminDashboard':
        AdminDashboardPage($pdo);
        break;
    case 'destroy':
        require_once('Views/pages/deconnexion.php');
        connexionPage();
        break;
    default:
        errorPage();
        break;
}
