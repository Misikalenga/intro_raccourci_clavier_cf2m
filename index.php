<?php
session_start(); // Démarre la session
require_once 'Controllers/pagesController.php';
require_once 'Controllers/crudController.php';
require_once 'Models/CrudModel.php';
require_once 'Controllers/routeController.php';

// showArray($_SESSION['user']);

define('ROOT', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));


$pdo = null;
