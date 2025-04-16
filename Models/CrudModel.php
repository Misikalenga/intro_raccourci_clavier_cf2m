<?php

require_once 'PdoModel.php';

// requete pour inséré des utilisateur dans la base de données
function registerNewUserDB($pdo, $user, $password)
{
    // Vérifier si le nom d'utilisateur existe déjà
    $query = $pdo->prepare("SELECT COUNT(*) FROM users WHERE user = :user");
    $query->execute(['user' => $user]);
    $exists = $query->fetchColumn();

    if ($exists > 0) {
        return false; // Retourne false si l'utilisateur existe déjà
    }

    // Insérer le nouvel utilisateur
    $req = "INSERT INTO users (user, password) VALUES (:user, :password)";
    $stmt = $pdo->prepare($req);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
    $stmt->execute();
    $stmt->closeCursor();
    
    return true;
}

function getUser($pdo, $user)
{
    $req = $pdo->prepare('SELECT user, password FROM users WHERE user = :user');
    $req->bindValue(':user', $user, PDO::PARAM_STR);
    $req->execute();
    return $req->fetch(); 
}
function getShortcutWindowsDB($pdo)
{
    $req = $pdo->query('SELECT id, shortcut, description FROM raccourcis');
    return $req->fetchAll();
}


function getShortcutVscodeDB($pdo)
{
    $req = $pdo->query('SELECT id, shortcut, description FROM raccourcis_vscode');
    return $req->fetchAll();
}
