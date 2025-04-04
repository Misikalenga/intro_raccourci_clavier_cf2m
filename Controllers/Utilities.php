<?php 

function renderPage($data){
    extract($data);
    ob_start();
    require_once $view;
    $content = ob_get_clean();
    require_once 'Views/commons/layout.php';
}

function showArray($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}