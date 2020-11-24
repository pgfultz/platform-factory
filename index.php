<?php

  require_once "config.php"; 

  if(file_exists("pages/".$explode[0].".php")){
    include_once "pages/".$explode[0].".php";
  }else{
    include_once "pages/404.php";
  }
?>

