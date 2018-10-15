<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

/*$mail_host = 'smtp.mailtrap.io';        // Specify main and backup SMTP servers
$mail_username = 'ec668f36c99236';      // SMTP username
$mail_password = '09288dd8eed4ed';      // Enable TLS encryption, `ssl` also accepted
$mail_port = 2525;*/

$mail_host = 'mail.8-ideas.com';        // Specify main and backup SMTP servers
$mail_username = 'noreply@8-ideas.com';      // SMTP username
$mail_password = 'passw0rd';      // Enable TLS encryption, `ssl` also accepted
$mail_port = 465;

if(isset($_POST['submitted'])) {
    if($_POST['type'] == 'participate') {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = $mail_host;                     // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = $mail_username;                 // SMTP username
            $mail->Password = $mail_password;                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $mail_port;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('noreply@8-ideas.com', '8-ideas');
            $mail->addAddress('hello@8-ideas.com', '8-ideas');     // Add a recipient

            // Get the form fields and remove whitespace.
            $name = strip_tags(trim($_POST["name"]));
            $name = str_replace(array("\r","\n"),array(" "," "),$name);
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML

            // Set the email subject.
            $subject = "New GAED2 participate submission from $name";
            // Build the email content.
            $email_content = "<strong>Name:</strong> $name <br />";
            $email_content .= "<strong>Email:</strong> $email <br />";

            $mail->Subject = $subject;
            $mail->Body    = $email_content;

            $mail->send();
            echo 'Your e-mail has been submitted. Thank you';
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    } elseif($_POST['type'] == 'subscription') {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = $mail_host;                     // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = $mail_username;                 // SMTP username
            $mail->Password = $mail_password;                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $mail_port;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('noreply@8-ideas.com', '8-ideas');
            $mail->addAddress('hello@8-ideas.com', '8-ideas');     // Add a recipient

            // Get the form fields and remove whitespace.
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML

            // Set the email subject.
            $subject = "New GAED2 email submission";
            // Build the email content.
            $email_content .= "<strong>Email:</strong> $email <br />";

            $mail->Subject = $subject;
            $mail->Body    = $email_content;

            $mail->send();
            echo 'Message has been sent. Thank you';
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}

