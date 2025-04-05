<?php

require_once 'Models/PdoModel.php'; // Connexion PDO commune

// requete pour inséré des utilisateur dans la base de données
function registerNewUserDB($user, $password)
{
    $req = ('INSERT INTO users (user, password) VALUES (:user, :password)');
    $stmt = setDB()->prepare($req);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
    $stmt->execute();
    $stmt->closeCursor();
    return true;
}
function getShortcutWindowsDB()
{
    $req = 'SELECT id, shortcut, description FROM raccourcis';
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}


function getShortcutVscodeDB()
{
    $req = 'SELECT id, shortcut, description FROM raccourcis_vscode';
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

