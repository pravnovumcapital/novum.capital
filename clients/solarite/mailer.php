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
            $subject = "New Solarite participate submission from $name";
            // Build the email content.
            $email_content = "<strong>Name:</strong> $name <br />";
            $email_content .= "<strong>Email:</strong> $email <br />";

            $mail->Subject = $subject;
            $mail->Body    = $email_content;

            $mail->send();
            echo 'Thank you for signing up for the Solarite token sale. We have many exciting privileges awaiting you. Please watch out for our upcoming email notices.';
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    } elseif($_POST['type'] == 'contact') {
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
			$phone = trim($_POST["phone"]);
            $message = trim($_POST["message"]);

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML

            // Set the email subject.
            $subject = "New Solarite contact form submission from $name";
            // Build the email content.
            $email_content = "<strong>Name:</strong> $name <br />";
            $email_content .= "<strong>Email:</strong> $email <br />";
			$email_content .= "<strong>Contact Number:</strong> $phone <br />";
            $email_content .= "<strong>Message:</strong> $message<br />";


            $mail->Subject = $subject;
            $mail->Body    = $email_content;

            $mail->send();
            echo 'Thank you for your message. We will get back to you shortly.';
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}

