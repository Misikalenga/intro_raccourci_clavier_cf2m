<?php 

// Définition des constantes
define('DB_HOST', 'localhost');
define('DB_NAME', 'testt');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Fonction centralisée pour gérer la connexion
function setDB() {
    static $pdo = null; // Garde la connexion persistante
    if ($pdo === null) {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
        } catch (PDOException $e) {
            die("Erreur lors de la connexion : " . htmlspecialchars($e->getMessage()));
        }
    }
    return $pdo;
}
