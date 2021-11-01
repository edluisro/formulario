<?php
 
use PHPMailer \ PHPMailer \ PHPMailer ; 
 use  PHPMailer \ PHPMailer \ Exception ; 

 require  'Mailer/Exception.php' ; 
 require  'Mailer/PHPMailer.php' ; 
 require  'Mailer/SMTP.php' ; 

 //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'Erod1697@gmail.com';                     //SMTP username
    $mail->Password   = 'Eduardoluis';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('Erod1697@gmail.com', 'Eddi');
    $mail->addAddress('Erod1697@gmail.com');     //Add a recipient
   


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Asunto muy importante';
    $mail->Body    = 'Correo de prueba <b>in bold!</b>';
    $mail->AltBody = 'Holis';

    $mail->send();
    echo 'El mensaje a sido enviado';
} catch (Exception $e) {
    echo "A ocurrido un error al enviar el mensaje: {$mail->ErrorInfo}";
}