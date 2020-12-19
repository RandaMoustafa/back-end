<?php
$p = empty($_GET['p'])? 'home' : $_GET['p'];
$page = "views/$p.php";
include_once 'templets/header';

if (file_exists($page)) {
    require_once $page;
} else {
    require_once 'views/404.php';
}
include_once 'templets/footer';
