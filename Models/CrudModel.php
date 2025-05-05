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

    // role par défaut : 'simple'
    $role = 'simple';

    // Insérer le nouvel utilisateur avec le role par défaut
    $req = "INSERT INTO users (user, password, role) VALUES (:user, :password, :role)";
    $stmt = $pdo->prepare($req);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
    $stmt->bindParam(':role', $role, PDO::PARAM_STR); // Ajout du role par défaut
    $stmt->execute();
    $stmt->closeCursor();

    return true; // Retourne true si l'inscription réussit
}


// enregistre un nouveau commentaire
function setComment(PDO $pdo, string $message): bool|string
{
    if (!isset($_SESSION['id'])) {
        return "Erreur : Vous devez être connecté pour envoyer un commentaire.";
    }

    $user_id = $_SESSION['id']; // ✅ Récupère l'ID utilisateur connecté

    if (empty(trim($message))) {
        return "Erreur : Le message ne peut pas être vide.";
    }

    if (strlen($message) < 10 || strlen($message) > 500) {
        return "Erreur : Le message doit contenir entre 10 et 500 caractères.";
    }

    try {
        $req = "INSERT INTO comments (user_id, message) VALUES (:user_id, :message)";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
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
    $req = $pdo->prepare("
        SELECT users.id, users.user, comments.message 
        FROM comments
        JOIN users ON comments.user_id = users.id
        
    ");
    $req->execute();
    return $req->fetchAll();
}


// recupere un utilisateur
function getUser(PDO $pdo, string $user): string|array
{
    $req = $pdo->prepare('SELECT * FROM users WHERE user = :user');
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

