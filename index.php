<?php
session_start(); // Démarre la session
require_once 'Controllers/pagesController.php';
require_once 'Controllers/crudController.php';
require_once 'Models/CrudModel.php';
require_once 'Controllers/routeController.php';


$pdo = null;
