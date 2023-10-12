<?php
define("INCLUDE_DIR", "/Applications/XAMPP/xamppfiles/lib/php/");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR  . INCLUDE_DIR . 'smarty-4.3.2/libs/');
date_default_timezone_set("America/Chicago");

//Start new session
session_start();

/**
 * Smarty configuration 
 * 
 */
require_once('Smarty.class.php');
//Ignore linter error below, Smarty *is* included above
$smarty = new Smarty();

$smarty->setTemplateDir('/Applications/www/server-side/src/templates/');
$smarty->setCompileDir('/Applications/www/server-side/src/templates_c/');
$smarty->setConfigDir('/Applications/www/server-side/src/configs/');
$smarty->setCacheDir('/Applications/www/server-side/src/cache/');

/**
 * Website Variables
 */
$smarty->assign('firstName', 'Brianna');
$smarty->assign('lastName', 'Ragsdale');
$smarty->assign('semester', 'Fall 2023');
$smarty->assign('websiteName', 'Server Side');
