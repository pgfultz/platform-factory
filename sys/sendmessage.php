<?php
    require_once '../config.php';

    $retorno = array();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = $pdo->prepare("INSERT INTO `contact_us` SET `name` = ?, `email` = ?, `subject` = ?, `message` = ? ");
    if($sql->execute(array($name,$email,$subject,$message))){
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