<?php 

require_once './Models/CrudModel.php'; 

function createCurrentUser($pdo, $user, $password) {
    if (registerNewUserDB($pdo, $user, $password)) {
        header('Location: connexionPage');
        exit();
    } else {
        $_SESSION['error_message'] = "Nom d'utilisateur déjà pris.";
        header('Location: inscriptionPage'); // Redirige vers la page d'inscription
        exit();
    }
}