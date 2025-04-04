<?php 

// Définition des constantes pour les informations sensibles
define('DB_HOST', 'localhost');         // Adresse du serveur
define('DB_NAME', 'testt');   // Nom de la base de données
define('DB_USER', 'root');       // Utilisateur avec privilèges limités
define('DB_PASSWORD', ''); // Mot de passe fort

try {
    // Connexion sécurisée avec PDO
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gestion des erreurs via exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Récupération des données en tableaux associatifs
        PDO::ATTR_EMULATE_PREPARES => false, // Désactive les requêtes préparées émulées
    ];

    // Création de l'objet PDO
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);

} catch (PDOException $e) {
    // Gestion des erreurs
    echo "Erreur lors de la connexion : " . htmlspecialchars($e->getMessage());
}
?>
