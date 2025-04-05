<?php 

require_once 'Models/CrudModel.php'; 

function createCurrentUser($user, $password) {
    if (registerNewUserDB($user, $password)){
        header('Location: home');
        exit;
    } else {
        throw new Exception("Echec lors de l'inscription !");
        
    }
}
