<?php

    /* DEBUG */
    error_reporting(E_ALL);

    ini_set('ignore_repeated_errors', TRUE);
    ini_set('display_errors', FALSE);
    ini_set('log_errors', TRUE);
    ini_set('error_log', 'php_error_log');

    /* LIBS */
    require_once 'libs/database.php'; // Archivos base
    require_once 'libs/controller.php'; // Archivos base
    require_once 'libs/model.php'; // Archivos base
    require_once 'libs/view.php'; // Archivos base
    require_once 'libs/app.php'; // Archivos base

    /* CONFIG */
    require_once 'config/config.php';
    
    $app = new App();