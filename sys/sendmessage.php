<?php
    require_once '../config.php';

    // Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
    include "../PHPMailer-master/PHPMailerAutoload.php"; 

    $retorno = array();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Inicia a classe PHPMailer 
    $mail = new PHPMailer(); 

    // Método de envio 
    $mail->IsSMTP(); 

    // Enviar por SMTP 
    $mail->Host = "smtp.hostinger.com.br"; 

    // Você pode alterar este parametro para o endereço de SMTP do seu provedor 
    $mail->Port = 587; 


    // Usar autenticação SMTP (obrigatório) 
    $mail->SMTPAuth = true; 

    // Usuário do servidor SMTP (endereço de email) 
    // obs: Use a mesma senha da sua conta de email 
    $mail->Username = 'contactform@platformfactory.co.uk'; 
    $mail->Password = 'Platform@*2020'; 

    // Configurações de compatibilidade para autenticação em TLS 
    $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

    // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
    // $mail->SMTPDebug = 2; 

    // Define o remetente 
    // Seu e-mail 
    $mail->From = "contactform@platformfactory.co.uk"; 

    // Seu nome 
    $mail->FromName = "Platform Factory"; 

    // Define o(s) destinatário(s) 
    $mail->AddAddress('contact@platformfactory.co.uk'); 

    // Opcional: mais de um destinatário
    // $mail->AddAddress('fernando@email.com'); 

    // Opcionais: CC e BCC
    // $mail->AddCC('joana@provedor.com', 'Joana'); 
    // $mail->AddBCC('roberto@gmail.com', 'Roberto'); 

    // Definir se o e-mail é em formato HTML ou texto plano 
    // Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
    $mail->IsHTML(true); 

    // Charset (opcional) 
    $mail->CharSet = 'UTF-8'; 

    // Assunto da mensagem 
    $mail->Subject = "Contact"; 

    // Corpo do email 
    $mail->Body = '<b>Nome:</b>'.$name.'<br/><b>Email:</b>'.$email.'<br/><b>Assunto:</b>'.$subject.'<br/><b>Mensagem:</b>'.$message.'<br/>'; 

    // Opcional: Anexos 
    // $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 

    // Envia o e-mail 
    $enviado = $mail->Send(); 

    // Exibe uma mensagem de resultado 
    if ($enviado) 
    { 
        $retorno[0] = array(
            "status_mail" => "ok",
        );
    } else { 
        $retorno[0] = array(
            "status_mail" => "error",
            "mail_error_message" => $mail->ErrorInfo
        );
    } 


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