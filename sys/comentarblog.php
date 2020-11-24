<?php

if(isset($_GET['id'])){
    require_once '../config.php';
    $id = $_GET['id'];
    $titulo = $_GET['titulo'];
    $nome = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $website = $_POST['inputUrl'];
    $comentario = $_POST['message'];

    $sql = $pdo->prepare("INSERT INTO `blog_comments` SET `id_blog` = ?, `nome` = ?, `email` = ?, `website` = ?, `comment` = ?");
    if($sql->execute(array($id,$nome,$email,$website,$comentario))){
        header("location: ../blog/".$id."/".$titulo);
    }else{
        echo "<script>
        alert('Error commenting!');
        window.location.href='../blog/".$id."/".$titulo."';
        </script>";
}
}else{
    echo "<script>
    alert('Unexpected error!');
    window.location.href='../blog/".$id."/".$titulo."';
    </script>";
}

?>