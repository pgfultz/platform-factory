<?php

date_default_timezone_set("America/Sao_Paulo");

define('BASE', 'http://localhost/platform-factory');
//define('BASE', 'https://platformfactory.co.uk');
define('BASE_ADM', 'https://admin.platformfactory.co.uk');

$pdo = new PDO('mysql:host=localhost;dbname=platform-factory', 'root', '');
//$pdo = new PDO('mysql:host=localhost;dbname=u207526276_platformfactor', 'u207526276_platformfactor', 'Platformfactory@*2020');
$pdo->exec("set names utf8");

$url = (isset($_GET['url']) ? $_GET['url'] : 'home');
$explode = explode('/', $url);

session_start();
?>
