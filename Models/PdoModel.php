<?php 
require_once(__DIR__ . '/../config.dev.php');


try {
    $pdo = new PDO(DSN, DB_CONNECT_USER, DB_CONNECT_PWD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Erreur lors de la connexion : " . ($e->getMessage()));
}
