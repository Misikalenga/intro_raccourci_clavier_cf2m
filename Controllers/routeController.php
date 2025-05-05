<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));

if (empty($_GET['page'])) {
    $url[0] = "inscriptionPage";
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
            $_SESSION['id'] = $data['id'];
            $_SESSION['user'] = $data['user'];
            $_SESSION['score'] = $data['score'];
            $_SESSION['role'] = $data['role'];
            $_SESSION['statue'] = "connecté";

            header('Location: home');
            exit();
        } else {
            $_SESSION['error_message'] = "Nom d'utilisateur ou mot de passe incorrect !";
            header('Location: connexionPage');
            exit();
        }
        break;

    case 'inscriptionPage':
        inscriptionPage();
        break;

    case 'inscription':
        $data = getUser($pdo, $_POST['user']);
        if ($data) {
            $_SESSION['error_message'] = "Ce nom d'utilisateur existe déjà.";
            header('Location: inscriptionPage');
            exit();
        } else {
            $_SESSION['success_message'] = "Vous avez créé votre compte !";
            createCurrentUser($pdo, $_POST['user'], $_POST['password']);
            header('Location: connexionPage');
            exit();
        }
        break;

    case 'intro':
        introPage($pdo);
        break;
        case 'training':
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['time'], $_POST['user'])) {
                header('Content-Type: application/json');
        
                // 🔎 Debug : journaliser les valeurs de session et de POST
                file_put_contents('session_debug.log', print_r([
                    'session_user' => $_SESSION['user'] ?? 'non défini',
                    'post_user' => $_POST['user'] ?? 'non défini',
                    'session_complete' => $_SESSION
                ], true));
        
                // Vérifie que la session est valide
                if (!isset($_SESSION['user']) || $_SESSION['user'] !== $_POST['user']) {
                    echo json_encode(['status' => 'error', 'message' => 'Utilisateur non autorisé.']);
                    exit;
                }
        
                $time = intval($_POST['time']);
                $user = trim($_POST['user']);
        
                try {
                    $stmt = $pdo->prepare("INSERT INTO temp (username, time_ms, created_at) VALUES (:username, :time_ms, NOW())");
                    $stmt->bindParam(':username', $user, PDO::PARAM_STR);
                    $stmt->bindParam(':time_ms', $time, PDO::PARAM_INT);
                    $stmt->execute();
        
                    echo json_encode(['status' => 'success', 'message' => 'Temps enregistré avec succès !']);
                } catch (PDOException $e) {
                    echo json_encode(['status' => 'error', 'message' => 'Erreur SQL : ' . $e->getMessage()]);
                }
                exit;
            } else {
                pratiquePage();
            }
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
        $data = setComment($pdo, $_POST['comment']);
        if ($data === true) {
            $_SESSION['success_message'] = "Votre message a été envoyé avec succès !";
            header('Location: home');
            exit();
        } else {
            $_SESSION['error_message'] = $data;
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
