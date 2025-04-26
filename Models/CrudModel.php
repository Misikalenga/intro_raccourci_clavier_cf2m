<?php

require_once 'PdoModel.php';

// enregistre un nouvel utilisateur
function registerNewUserDB(PDO $pdo, string $user, string $password): bool
{
    // Vérifier si le nom d'utilisateur existe déjà
    $query = $pdo->prepare("SELECT COUNT(*) FROM users WHERE user = :user");
    $query->execute(['user' => $user]);
    $exists = $query->fetchColumn();

    if ($exists > 0) {
        return false; // Retourne false si l'utilisateur existe déjà
    }

    // Rôle par défaut : 'simple'
    $role = 'simple';

    // Insérer le nouvel utilisateur avec le rôle par défaut
    $req = "INSERT INTO users (user, password, rôle) VALUES (:user, :password, :role)";
    $stmt = $pdo->prepare($req);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
    $stmt->bindParam(':role', $role, PDO::PARAM_STR); // Ajout du rôle par défaut
    $stmt->execute();
    $stmt->closeCursor();

    return true; // Retourne true si l'inscription réussit
}


// enregistre un nouveau commentaire
function setComment(PDO $pdo, string $user, string $message): bool|string
{
    if (empty(trim($user)) || empty(trim($message))) {
        return "Erreur : Les champs 'user' et 'message' ne peuvent pas être vides.";
    }

    if (strlen($user) < 2 || strlen($user) > 60) {
        return "Erreur : Le nom est trop court.";
    }

    if (strlen($message) < 10 || strlen($message) > 500) {
        return "Erreur : Le message doit contenir entre 10 et 500 caractères.";
    }

    try {
        $req = "INSERT INTO comments (name, message) VALUES (:name, :message)";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':name', $user, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);

        // Exécuter la requête
        $stmt->execute();
        $stmt->closeCursor();

        return true;
    } catch (PDOException $e) {

        return "Erreur SQL : " . $e->getMessage();
    }
}
function getComments(PDO $pdo): array
{
    $req = $pdo->prepare('SELECT * FROM comments'); // Ajout explicite des colonnes
    $req->execute();
    return $req->fetchAll();
}


// recupere un utilisateur
function getUser(PDO $pdo, string $user): string|array
{
    $req = $pdo->prepare('SELECT user, password, rôle FROM users WHERE user = :user');
    $req->bindValue(':user', $user, PDO::PARAM_STR);
    $req->execute();
    return $req->fetch();
}


// recupere les raccourcis clavier windows
function getShortcutWindowsDB(PDO $pdo): array
{
    $req = $pdo->query('SELECT id, shortcut, description FROM raccourcis');
    return $req->fetchAll();
}

// recupere les raccourcis clavier vscode
function getShortcutVscodeDB(PDO $pdo): array
{
    $req = $pdo->query('SELECT id, shortcut, description FROM raccourcis_vscode');
    return $req->fetchAll();
}
