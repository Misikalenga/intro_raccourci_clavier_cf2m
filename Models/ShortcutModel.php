<?php 
require_once 'Models/PdoModel.php';

function getWindowsShortcuts($pdo) {
    $sql = "SELECT shortcut, description FROM raccourcis";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retourne les résultats sous forme de tableau associatif
}
function getVscodeShortcuts($pdo) {
    $sql = "SELECT shortcut, description FROM raccourcis_vscode";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retourne les résultats sous forme de tableau associatif
}
