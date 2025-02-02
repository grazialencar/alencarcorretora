<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if(isset($_POST['enviar'])){
    $mail = new PHPMailer(true);


$body = "<h3>Formulário Lead do site</h3>
<strong>Nome:</strong> ". $_POST['nome']."
<br>
<strong>WhatsApp:</strong> ". $_POST['tel']."
<br>
<strong>E-mail:</strong> ". $_POST['email']."
<br>
<strong>CNPJ:</strong> ". $_POST['cnpj']."
";


try {

    
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.hostinger.com'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contato@alencarcorretoraseguros.com.br';
    $mail->Password   = 'Alencar@30';
    
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('contato@alencarcorretoraseguros.com.br', 'Alencar Corretora');
    $mail->addAddress('contato@alencarcorretoraseguros.com.br', 'Alencar Corretora');   

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Lead Site';
    $mail->Body    = $body;

    $mail->send();
    
    echo 'Enviado com sucesso';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}