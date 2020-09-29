<?php

date_default_timezone_set("America/Sao_Paulo");

define('BASE', 'http://localhost/platform-factory');

$pdo = new PDO('mysql:host=localhost;dbname=platform-factory', 'root', '');
$pdo->exec("set names utf8");

$url = (isset($_GET['url']) ? $_GET['url'] : 'home');
$explode = explode('/', $url);

session_start();
?>
