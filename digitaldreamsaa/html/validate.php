<?php


// define variables and set to empty values
$firstNameErr = $lastNameErr = $emailErr = $messageErr = $serviceErr = $websiteErr = "";
$firstName = $lastName = $email = $message = $service = $website = "";
// include require files
require('PHPMailer.php');
require('SMTP.php');
require('Exception.php');
/** Define name spaces
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstName"])) {
        $firstNameErr = "First Name is required";
    } else {
        $firstName = test_input($_POST["firstName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
            $firstNameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["lastName"])) {
        $lastNameErr = "Last Name is required";
    } else {
        $lastName = test_input($_POST["lastName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
            $lastNameErr = "Only letters and white space allowed";
        }
        
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Invalid URL";
        }
      }
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }
    if (empty($_POST["service"])) {
        $serviceErr = "Please Select a Service";
    } else {
        $service = test_input($_POST["service"]);
    }
    
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

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
$mail->Subject = "Form Submission";
//  * set sender email
$mail->addReplyTo("chawne@digitaldreamsaa.com");
//  * email body
$mail->Body = "<h1>It's Always The Right Time time!</h1>
<p>Let's Get Your Creative Juices Flowing So Your Business Can Thrive</p>
<hr>
<p>We Work Endlessly To Help You Reach A Desired Outcome That <br>Will Be Sure To Set You Apart!</p>";
//  * add recipient
$mail->addAddress($email);
$mail->addAttachment("../img/lsd.jpg");
//  * Finally send email
if ( $mail->Send() ) {
    echo "Email Sent..!";
}else{
    echo "Email not Sent. Mailer Erro: ";
}
//  * closing Smtp connection
$mail->smtpClose();

?>
