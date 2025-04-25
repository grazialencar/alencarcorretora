<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if(isset($_POST['enviar'])){
    $mail = new PHPMailer(true);


$body = "<h3>Formulario Lead do site</h3>
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
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;


    $mail->setFrom('contato@alencarcorretoraseguros.com.br', 'Alencar Corretora');
    $mail->addAddress('erlane.alencar30@gmail.com', 'Erlane');   


    $mail->isHTML(true);
    $mail->Subject = 'Lead Site';
    $mail->Body    = $body;

    $mail->send();
    
    echo "<script> alert('Formulário enviado com sucesso')</script> <script>document.location='../index.html'</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}