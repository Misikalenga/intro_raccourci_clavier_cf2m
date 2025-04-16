<?php 
// const DB_CONNECT_TYPE = "mysql";
// const DB_CONNECT_HOST = "sqlgold.webmo.fr";
// const DB_CONNECT_PORT = 48614;
// const DB_CONNECT_NAME = "2025_web_agim";
// const DB_CONNECT_CHARSET = "utf8";
// const DB_CONNECT_USER = "2025_web_agim";
// const DB_CONNECT_PWD = "iO0QB3gH7cw1";

const DB_CONNECT_TYPE = "mysql";
const DB_CONNECT_HOST = "localhost";
const DB_CONNECT_PORT = 3306;
const DB_CONNECT_NAME = "raccourci_clavier_proj";
const DB_CONNECT_CHARSET = "utf8";
const DB_CONNECT_USER = "root";
const DB_CONNECT_PWD = "";

const DSN = DB_CONNECT_TYPE . ":host=" . DB_CONNECT_HOST . ";port=" . DB_CONNECT_PORT . ";dbname=" . DB_CONNECT_NAME . ";charset=" . DB_CONNECT_CHARSET;

try {
    $pdo = new PDO(DSN, DB_CONNECT_USER, DB_CONNECT_PWD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Erreur lors de la connexion : " . ($e->getMessage()));
}
