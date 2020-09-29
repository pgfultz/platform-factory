<?php
    require_once '../config.php';

    $retorno = array();

    $service = $_POST['service'];
    $description = $_POST['description'];
    $clientName = $_POST['clientName'];
    $clientEmail = $_POST['clientEmail'];
    $clientPhone = $_POST['clientPhone'];

    $sql = $pdo->prepare("INSERT INTO `book_call` SET `service` = ?, `description` = ?, `client_name` = ?, `client_email` = ?, `client_phone` = ? ");
    if($sql->execute(array($service,$description,$clientName,$clientName,$clientPhone))){
        $retorno[0] = array(
            "status" => "ok",
        );
    }else{
        $retorno[0] = array(
            "status" => "error",
        );
    }

    echo json_encode($retorno);
?>