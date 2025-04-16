<?php 

require_once './Models/CrudModel.php'; 

function createCurrentUser($pdo, $user, $password) {
    if (registerNewUserDB($pdo, $user, $password)) {
        header('Location: connexionPage');
        exit();
    } else {
        throw new Exception("Échec lors de l'inscription !");
    }
}