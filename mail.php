<?php
session_start();
if(isset($_POST["submit"])){
require 'PHPMailerAutoload.php';

$name=$_POST["name"];
$email=$_POST["mail"];
$phone=$_POST["phone"];
$msg=$_POST["msg"];

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'malathi.mani2009@gmail.com';                 // SMTP username
$mail->Password = 'qwgivtrjbgkcnvhr';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('malathi.mani2009@gmail.com', 'Malathi');
$mail->addAddress('malathi.maghi89@gmail.com', 'Malathi');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Sample mail test';
$mail->Body    = 'Name :' .$name . '<br> Mail Id:' .$email. '<br>Phone:' .$phone. '<br>Message;' .$msg;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
session_destroy();
?> 