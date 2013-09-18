<?php

/**
 * Requirements
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/config/configuration.inc.php');
require_once PHP_DIR.'/libs/smarty/Smarty.class.php';
require_once PHP_DIR.'/libs/Router.class.php';

spl_autoload_register(function ($class_name) {
    if(file_exists(PHP_DIR.'/classes/'.$class_name . '.class.php')) {
        require_once(PHP_DIR.'/classes/'.$class_name . '.class.php');
    } else {
        throw new Exception("Unable to load $class_name.");
    }
});

/**
 * Library instanciation
 */
$pdo    = new PDO("mysql:host=" . DATABASE_HOST . ";dbname=" . DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
$smarty = new Smarty();