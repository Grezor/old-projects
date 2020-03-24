<?php
session_start();
require '../app/Autoloader.php';
App\Autoloader::register();

//if (isset($_GET['p'])) {
//    $p = $_GET['p'];
//} else {
//    $p = 'home';
//}
//
//
//
//
//ob_start();
//if ($p === 'home') {
//    require '../pages/home.php';
//} elseif ($p === 'article') {
//    require '../pages/single.php';
//}
//elseif ($p === 'categorie') {
//    require '../pages/categorie.php';
//}
//$content = ob_get_clean();
//require '../pages/template/default.php';

/**
 * singleton
 */
//$app = App\App::getInstance();
//$app->title = "test";
//
//$app2 = App\App::getInstance();
//echo $app2->title;
var_dump(App\App::getTable('Posts'));
var_dump(App\App::getTable('Users'));
var_dump(App\App::getTable('Categories'));



