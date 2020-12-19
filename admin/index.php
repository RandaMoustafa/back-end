<?php
$p = empty($_GET['p'])? 'home' : $_GET['p'];
$page = "views/$p.php";
if (file_exists("controller/$p.php") && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "controller/$p.php";
    die;
} 
include_once 'templates/header.php';

if (file_exists("views/$p.php") && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require_once "views/$p.php";
} else {
    require_once 'views/404.php';


}
include_once 'templates/footer.php';

