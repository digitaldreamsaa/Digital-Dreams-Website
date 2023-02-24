<?php
// include require files
require('PHPMailer.php');
require('SMTP.php');
require('Exception.php');
/** Define name spaces
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


// create instance o fphpmailer
$mail = new PHPMailer();
// * set mailer to use smtp
$mail->isSMTP();
//* define smtp host
$mail->Host = "smtp.gmail.com";
// Enable smtp auth
$mail->SMTPAuth = "true";
// set type of encryption (ssl/tls)
$mail->SMTPSecure = "tls";
//  * set port to connect to smtp
$mail->Port = "587";
//  * set gmail username
$mail->Username = "chawneangelo@gmail.com";
//  * set gmail password
$mail->Password = "rjjzirhfokodkzyp";
//  * set semail subjec
$mail->Subject = "Test Email Head";
//  * set sender email
$mail->setFrom("chawnea@digitaldreamsaa.com");
//  * email body
$mail->Body = "Here is your Email";
//  * add recipient
$mail->addAddress("chawneangelo@gmail.com");
//  * Finally send email
if ( $mail->Send() ) {
    echo "Email Sent..!";
}else{
    echo "Email not Sent. Mailer Erro: ";
}
//  * closing Smtp connection
$mail->smtpClose();
//  */
?>